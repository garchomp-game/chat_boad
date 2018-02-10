<?php /* Smarty version Smarty-3.1.8, created on 2018-02-11 01:33:15
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\boad\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19048696725a73d0b18e0689-60400891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c404eecae53381f8f6ef34737b5627ebbab6750' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\boad\\index.tpl',
      1 => 1518280394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19048696725a73d0b18e0689-60400891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a73d0b1909be6_45944254',
  'variables' => 
  array (
    'comments' => 0,
    'item' => 0,
    'login_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d0b1909be6_45944254')) {function content_5a73d0b1909be6_45944254($_smarty_tpl) {?>

<div class="boad-wrapper">
  <div class="container">
    <div class="boad-content">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <li class='user-name'><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li>
          <li class='comment'><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</li>
        <?php } ?>
      </ul>
    </div>
    <form class="" action="insert" method="post">
      <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['login_id']->value)===null||$tmp==='' ? '' : $tmp);?>
">
      <textarea name="comment" rows="6" cols="80"></textarea>
      <input type="submit" name="submit" value="送信">
    </form>
  </div>
</div>
<?php }} ?>