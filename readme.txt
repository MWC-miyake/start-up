�ygulp�ɂ��āz

���O�F
node.js�̓C���X�g�[������Ă��邩

gulp���s�F
1.�܂���ƃf�B���N�g��(��Fhoge)�Ɉړ����A�C���X�g�[���B
cd hoge
npm install

2.gulpfile.coffee����"browser proxy"��URL��ύX

3.npm gulp�i�ȍ~���ꂾ����gulp������悤�ɂȂ�j



�ySASS�ɂ��āz��SMACSS���x�[�X�Ƃ��Ă��܂��B
�Elib
��_font.scss �c�E�F�u�t�H���g���A����ȃt�H���g�g�p���ɋL�q
��_mixin.scss �cmixin���L�q
��_setting.scss �c�F��T�C�Y�̐ݒ�

�E_base.scss
�� �Z���N�^���̂��̂ւ̋L�q�B���Z�b�g�܂�

�E_layout.scss
�y�[�W�̃G���A�������s���B���g�݁Bclass���̑O��"l-"������B
�i���W���[�R���|�[�l���g�j
��Fl-header,l-footer
�J��Ԃ����ڂ�A�����t�H�[�����y�[�W���Ŏg���܂킹����̂ɂ��g���B
�i�}�C�i�[�R���|�[�l���g�j
��Fl-caontainer-12,l-grid-06

�E_module.scss
�ė��p�\�ȃp�[�c�B�y�[�W���\������X�̃R���|�[�l���g�i���i�j
���W���[���͂��܂��܂ȗv�f�ŗ��p�����\��������̂œ���̗v�f�Ɉˑ����Ȃ��悤�ɂ���B
����̗v�f�̂��߂Ƀ��W���[������肽����΁A�q�Z���N�^��q���Z���N�^�ł̑Ή��ɂ���B
�����K���͓��ɂȂ��̂ŁA�킩��₷��class���������OK

�E_state.scss
�X�e�[�g���[���́A���C�A�E�g�⃂�W���[���̃N���X�ƍ��킹�Ďg���B
�X�e�[�g�̖������[���� is- ����n�܂���̂Ƃ��āA����̃��C�A�E�g�Ɉˑ����Ă�����̂̓��C�A�E�g�����܂߂�悤����B
��Fis-active,is-search-active

�E_theme.scss
�J���[��w�i���A�����ڂɊւ�镔�����`����B

�Epage �c�e�y�[�W���Ƃɉ����㏑���������Ƃ��i���o���摜���j
�� _(page).scss (page)�͊e�y�[�W�̃p�[�}�����N

�E_vend.scss
�O�����C�u�����ibootstrap���j�̏㏑�����������ꍇ�B


�y�L�q���[���z
�E�q���Z���N�^�͂ł���΂��܂�g��Ȃ��悤�ɂ��A�q�Z���N�^���g���悤�ɂ���B
�E����q�͂Q�܂ł�S�|����B�i�R�K�w�܂Łj
�E���X�|���V�u�̋L�q�́A�e�L�q�̂������ɏ����B
�E�\�Ȍ���S�v�f��class�����A�v�f���̂ɃX�^�C�������Ȃ��B
�i��td,li,dt���A�e�����܂��Ă�����̂ɂ��Ă͂��̌���ł͂Ȃ��j
�E�ł��邾��id�ɂ��X�^�C�������Ȃ��B
�E�X�e�[�g�ȊO��"!important"���g�p���Ȃ��B�i�ǂ����Ă��Ƃ����ꍇ�͎d���Ȃ��j