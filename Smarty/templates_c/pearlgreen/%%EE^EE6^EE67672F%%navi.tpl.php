<?php /* Smarty version 2.6.26, created on 2012-06-01 11:22:35
         compiled from mypage/navi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mypage/navi.tpl', 29, false),array('modifier', 'h', 'mypage/navi.tpl', 64, false),array('modifier', 'number_format', 'mypage/navi.tpl', 66, false),array('modifier', 'default', 'mypage/navi.tpl', 66, false),)), $this); ?>
<div id="mynavi_area">
    <?php echo '<ul class="mynavi_list clearfix">'; ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo '<li><a href="./'; ?><?php echo ((is_array($_tmp=@DIR_INDEX_PATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">購入履歴一覧</a></li>'; ?><?php if (((is_array($_tmp=@OPTION_FAVOFITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<li><a href="favorite.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">お気に入り一覧</a></li>'; ?><?php endif; ?><?php echo '<li><a href="change.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">会員登録内容変更</a></li><li><a href="delivery.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delivery'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">お届け先追加・変更</a></li><li><a href="refusal.php" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'refusal'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">退会手続き</a></li>'; ?><?php echo ''; ?><?php else: ?><?php echo '<li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'index'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">購入履歴一覧</a></li>'; ?><?php if (((is_array($_tmp=@OPTION_FAVOFITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><?php echo '<li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'favorite'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">お気に入り一覧</a></li>'; ?><?php endif; ?><?php echo '<li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'change'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">会員登録内容変更</a></li><li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delivery'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">お届け先追加・変更</a></li><li><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" class="'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['tpl_mypageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'refusal'): ?><?php echo ' selected'; ?><?php endif; ?><?php echo '">退会手続き</a></li>'; ?><?php endif; ?><?php echo '</ul><!--▼現在のポイント-->'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['point_disp'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '<div class="point_announce clearfix"><p>ようこそ&nbsp;／&nbsp;<span class="user_name">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerName1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerName2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '様</span>'; ?><?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?><?php echo '&nbsp;現在の所持ポイントは&nbsp;<span class="point st">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['CustomerPoint'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo 'pt</span>&nbsp;です。'; ?><?php endif; ?><?php echo '</p></div>'; ?><?php endif; ?><?php echo '<!--▲現在のポイント-->'; ?>


</div>
<!--▲NAVI-->