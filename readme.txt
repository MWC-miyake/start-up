/**************************************
* �R�[�f�B���O�K��
**************************************/

/* �ȉ��K�{ ---------------------------------------------

�����T�|�[�g�u���E�U����
�EPC�cWindows/Mac�@Chrome,Firefox,Edge,IE,Safari �e�u���E�U�ŐV��
�E�X�}�z�cAndroid 5.0�ȏ� / iOS 9�ȏ�
��������1920px�܂ŃT�|�[�g


�����f�B���N�g���\������
�Ehtdocs���������[�g�Ƃ���
�Ecommon > css ���ɑS�X�^�C���V�[�g�̊i�[
�Ecommon > js ���ɑSjavascript�t�@�C���̊i�[
�Ecommon > img ���ɑSimg�t�@�C���i�[
��img�f�B���N�g�������͋��ʂŎg�p����t�@�C���i���S��A�C�R�����j��u���A
�y�[�W���Ƃ̃t�@�C���͊e�f�B���N�g�����쐬���i�[
�Etheme�t�H���_��WP�p�Ȃ̂ŁA�ÓI�R�[�f�B���O�݂̂̏ꍇ�͖�������OK


�����摜�ɂ��ā���
jpg��png��K�X�g��������Bjpg�͉掿80�Ő؂�o��


����CSS�L�q���[������
�Efont-size �� rem ���g�p�B ��F16px �� 1.6rem
���ȉ��͊���ĂȂ��Ǝ��Ԃ�������Ǝv���̂ŁA�Ȃ�ׂ���OK
�E�q���Z���N�^�͂ł���΂��܂�g��Ȃ��悤�ɂ��A�q�Z���N�^���g���悤�ɂ���B
�E����q�͂Q�܂ł�S�|����B�i�R�K�w�܂Łj
�E���X�|���V�u�̋L�q�́A�e�L�q�̂������ɏ����B
�E�\�Ȍ���S�v�f��class�����A�v�f���̂ɃX�^�C�������Ȃ��B
�i��td,li,dt���A�e�����܂��Ă�����̂ɂ��Ă͂��̌���ł͂Ȃ��j
�E�ł��邾��id�ɂ��X�^�C�������Ȃ��B
�E_state,_vend�ȊO��"!important"���g�p���Ȃ��B�i�ǂ����Ă��Ƃ����ꍇ�͎d���Ȃ��j


����Sass���g�p���Ȃ��ꍇ����
css�́A���ɗ��R���Ȃ�����Ȃ�ׂ� "htdocs > common > css > style.css"���ɑS�ċL�q���邱�ƁB
���C�u������t���[�����[�N���A�ʓr�p�ӂ���Ă�����͕̂��ʂɕʓr�ǂݍ��ށB


����Sass���g�p����ꍇ����
�ȉ��͕K���g�p����B����ɍ폜���Ȃ����ƁB
�Elib
��_font.scss �c�E�F�u�t�H���g���A����ȃt�H���g�g�p���ɋL�q
��_mixin.scss �cmixin���L�q
��_setting.scss �c�e��ݒ�

�Enormalize
_normalize.scss or _reset.scss�A�ǂ��炩�̓ǂݍ��݂�I������B
�i�f�t�H���g��reset�B�g���₷���ق���OK�j

�E_base.scss
�f�t�H���g�X�^�C���y�уZ���N�^���̂��̂ւ̃X�^�C���w��

�E_layout.scss
��ɂ�����css�������B�ǂ��ɏ������炢�����킩��Ȃ��Ȃ����炱����OK�B


���ȉ��ɂ��̑���scss�ɂ��Ă�������Ă��邪�A
�@�ȉ����g�p���Ȃ��ꍇ�͏�L�܂ł�scss�ɋL�q���邱�ƁB
�@���C���͑S��"_layout.scss"�ɋL�q���ėǂ��B


/* �ȉ��C�� ---------------------------------------------

����CSS�݌v�ɂ��ā���
�E_module.scss
�ė��p�\�ȃp�[�c�B�y�[�W���\������X�̃R���|�[�l���g�i���i�j�ŁA
BEM�̑ΏۂƂ��Ȃ��B�i�A�����Ȃ��j
���W���[���͂��܂��܂ȗv�f�ŗ��p�����\��������̂œ���̗v�f�Ɉˑ����Ȃ��悤�ɂ���B
����̗v�f�̂��߂Ƀ��W���[������肽����΁A�q�Z���N�^��q���Z���N�^�ł̑Ή��ɂ���B

�E_state.scss
�X�e�[�g���[���́A���C�A�E�g�⃂�W���[���̃N���X�ƍ��킹�Ďg���B
�X�e�[�g�̖������[���� is- ����n�܂���̂Ƃ��āA����̃��C�A�E�g�Ɉˑ����Ă�����̂̓��C�A�E�g�����܂߂�悤�ɂ���B
BEM�̑ΏۊO�B
��F.is-active .is-search-active

�E_theme.scss
�J���[��w�i���A�����ڂɊւ�镔�����`����B
BEM�̑ΏۂƂ����A��ɒP��class
��F.red .bdBlue .bgGray

�Epage �c�e�y�[�W���Ƃɉ����㏑���������Ƃ��i���o���摜���j
��F_about.scss
�y�[�W���Ƃ�body����id�����Ďg�p���Ă��B

�E_vend.scss
�O�����C�u�����ibootstrap���j�̏㏑�����������ꍇ�B


���������K���iBEM��Ձj����
class���́A
.block__element_modifier
�̂悤�ɋL�q�B
�L�������P�[�X�g�p��
��F.blockHere__elementInner_modifierHow

�ė��p�\�ȃp�[�c�ɂ��ẮABEM�ł͂Ȃ��P�Ƃ�class��������B
