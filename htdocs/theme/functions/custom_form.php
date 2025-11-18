<?php
/***********************************************************
* MW WP Form カスタマイズ
***********************************************************/

// 自動整形禁止
add_filter( 'mwform_content_wpautop_mw-wp-form', '__return_false' );

// バリデーション「日本語を含む」を追加する
if ( class_exists( 'MW_WP_Form_Abstract_Validation_Rule' ) ) {
	class MW_WP_Form_Validation_Rule_Japanese extends MW_WP_Form_Abstract_Validation_Rule {
		protected $name = 'japanese';

		public function rule( $key, array $options = array() ) {
			$value = $this->Data->get( $key );

			if ( is_null( $value ) ) {
				return;
			}
      if ( empty( $value ) ) {
				return;
			}
			if ( preg_match( '/[一-龠]+|[ぁ-ん]+|[ァ-ヴー]/u', $value ) ) {
				return;
			}

      $defaults = array(
				'message' => '日本語で入力してください。'
			);
      $options = array_merge( $defaults, $options );
			return $options['message'];
		}

		public function admin( $key, $value ) {
			?>
			<label><input type="checkbox" <?php checked( $value[ $this->getName() ], 1 ); ?> name="<?php echo MWF_Config::NAME; ?>[validation][<?php echo $key; ?>][<?php echo esc_attr( $this->getName() ); ?>]" value="1" />日本語を含む</label>
			<?php
		}
	}

	function mwform_validation_rule_japanese( $validation_rules ) {
		$instance = new MW_WP_Form_Validation_Rule_Japanese();
		$validation_rules[$instance->getName()] = $instance;
		return $validation_rules;
	}

	add_filter( 'mwform_validation_rules', 'mwform_validation_rule_japanese' );
}