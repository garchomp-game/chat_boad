<?php /* Smarty version Smarty-3.1.8, created on 2018-02-12 12:06:58
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\login\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3500466035a7efa51411001-70994900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e737beec2924214b305dca1a51d5071c744f8a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\login\\login_form.tpl',
      1 => 1518404817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3500466035a7efa51411001-70994900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7efa51429823_79702624',
  'variables' => 
  array (
    'login_error' => 0,
    'getdata' => 0,
    'name' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7efa51429823_79702624')) {function content_5a7efa51429823_79702624($_smarty_tpl) {?><div class="container">
  <form class="login_confirm" action="login_confirm" method="post">
    <p><?php echo validation_errors();?>
</p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['login_error']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
    <input type="hidden" name="pass" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['getdata']->value['pass'])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['getdata']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="password" name="password" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['password']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="submit" value="ログイン">
  </form>
</div>
<?php }} ?>