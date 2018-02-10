<?php /* Smarty version Smarty-3.1.8, created on 2018-02-11 00:04:15
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\login\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3500466035a7efa51411001-70994900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e737beec2924214b305dca1a51d5071c744f8a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\login\\login_form.tpl',
      1 => 1518275045,
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
    'name' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7efa51429823_79702624')) {function content_5a7efa51429823_79702624($_smarty_tpl) {?><div class="container">
  <form class="login_confirm" action="login_confirm" method="post">
    <input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="password" name="password" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['password']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="submit" value="ログイン">
  </form>
</div>
<?php }} ?>