<?php /* Smarty version Smarty-3.1.8, created on 2018-02-12 01:05:32
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\cart\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20787826145a8053516415f3-94692597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cb3484c0c2233d20580a1bb190722bd00ed4e1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\cart\\show.tpl',
      1 => 1518365111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20787826145a8053516415f3-94692597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a80535166b788_17785569',
  'variables' => 
  array (
    'cart' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a80535166b788_17785569')) {function content_5a80535166b788_17785569($_smarty_tpl) {?><div class="cart-wrapper">
  <div class="container">
    <div class="cart-content">
      <h1>カート</h1>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['cart']->value)===null||$tmp==='' ? '' : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
          <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">
          <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
          <b><?php echo $_smarty_tpl->tpl_vars['item']->value['headine'];?>
</b>
          <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
          <b>価格：<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
円</b>
        </li>
        <?php } ?>
      </ul>
      <form class="" action="complete" method="post">
        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
        <input type="hidden" name="headine" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['headine'];?>
">
        <input type="hidden" name="description" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
">
        <input type="hidden" name="value" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
">
        <input type="submit" name="" value="購入する">
      </form>
    </div>
  </div>
</div>
<?php }} ?>