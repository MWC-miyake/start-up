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


����gulp�ɂ��ā���
���O�F
node.js���C���X�g�[�����Ă����B
�o�[�W�����͔C�ӂŒ������邱�Ɓi������v6.11.3�j

gulp���s�F
1.�܂���ƃf�B���N�g��(��Fhoge)�Ɉړ����A�C���X�g�[���B
cd hoge
npm install

2.gulpfile.coffee����"browser proxy"��URL��ύX

3.npm run gulp
���O���[�o���ɂ�gulp���C���X�g�[�����Ă���ꍇ�́A"gulp"�݂̂�OK


����SASS�ɂ��ā��� ��SMACSS�x�[�X
�Elib
��_font.scss �c�E�F�u�t�H���g���A����ȃt�H���g�g�p���ɋL�q
��_mixin.scss �cmixin���L�q
��_setting.scss �c�e��ݒ�

�Enormalize
normalize.css��reset.css�A�ǂ��炩�̓ǂݍ��݂�I������B
�i�f�t�H���g��reset�B�g���₷���ق���OK�j

�E_base.scss
�f�t�H���g�X�^�C���y�уZ���N�^���̂��̂ւ̃X�^�C���w��

�E_layout.scss
�y�[�W�̃G���A�������s���B���g�݁Bclass���̑O��"l-"������B
�i���W���[�R���|�[�l���g�j
��F.l-header, .l-footer
�J��Ԃ����ڂ�A�����t�H�[�����y�[�W���Ŏg���܂킹����̂ɂ��g���B
�i�}�C�i�[�R���|�[�l���g�j
��F.l-container-12, .l-grid-06

�E_module.scss
�ė��p�\�ȃp�[�c�B�y�[�W���\������X�̃R���|�[�l���g�i���i�j
���W���[���͂��܂��܂ȗv�f�ŗ��p�����\��������̂œ���̗v�f�Ɉˑ����Ȃ��悤�ɂ���B
����̗v�f�̂��߂Ƀ��W���[������肽����΁A�q�Z���N�^��q���Z���N�^�ł̑Ή��ɂ���B
�����K���͓��ɂȂ��̂ŁA�킩��₷��class���������OK

�E_state.scss
�X�e�[�g���[���́A���C�A�E�g�⃂�W���[���̃N���X�ƍ��킹�Ďg���B
�X�e�[�g�̖������[���� is- ����n�܂���̂Ƃ��āA����̃��C�A�E�g�Ɉˑ����Ă�����̂̓��C�A�E�g�����܂߂�悤�ɂ���B
��Fis-active,is-search-active

�E_theme.scss
�J���[��w�i���A�����ڂɊւ�镔�����`����B

�Epage �c�e�y�[�W���Ƃɉ����㏑���������Ƃ��i���o���摜���j
�� _(page).scss (page)�͊e�y�[�W�̃p�[�}�����N

�E_vend.scss
�O�����C�u�����ibootstrap���j�̏㏑�����������ꍇ�B


����SASS�L�q���[������
�E�q���Z���N�^�͂ł���΂��܂�g��Ȃ��悤�ɂ��A�q�Z���N�^���g���悤�ɂ���B
�E����q�͂Q�܂ł�S�|����B�i�R�K�w�܂Łj
�E���X�|���V�u�̋L�q�́A�e�L�q�̂������ɏ����B
�E�\�Ȍ���S�v�f��class�����A�v�f���̂ɃX�^�C�������Ȃ��B
�i��td,li,dt���A�e�����܂��Ă�����̂ɂ��Ă͂��̌���ł͂Ȃ��j
�E�ł��邾��id�ɂ��X�^�C�������Ȃ��B
�E�X�e�[�g�ȊO��"!important"���g�p���Ȃ��B�i�ǂ����Ă��Ƃ����ꍇ�͎d���Ȃ��j