<?php /* Smarty version Smarty-3.1.8, created on 2018-02-12 01:34:46
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\login\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15896164225a806fb14750b6-77806620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c0e00bab746c7ecb5e005237fdd3cc84601809c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\login\\new.tpl',
      1 => 1518366882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15896164225a806fb14750b6-77806620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a806fb1497828_99864354',
  'variables' => 
  array (
    'name' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a806fb1497828_99864354')) {function content_5a806fb1497828_99864354($_smarty_tpl) {?><div class="container">
  <form class="create" action="create" method="post">
    <input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="password" name="password" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['password']->value)===null||$tmp==='' ? '' : $tmp);?>
">
    <input type="submit" value="新規作成">
  </form>
</div>
<?php }} ?>