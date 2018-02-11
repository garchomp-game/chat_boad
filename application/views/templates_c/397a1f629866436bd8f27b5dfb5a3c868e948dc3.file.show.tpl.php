<?php /* Smarty version Smarty-3.1.8, created on 2018-02-11 16:11:40
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\shop\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3243444995a7f9efe20e002-42833522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397a1f629866436bd8f27b5dfb5a3c868e948dc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\shop\\show.tpl',
      1 => 1518333099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3243444995a7f9efe20e002-42833522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7f9efe20e9e1_37290882',
  'variables' => 
  array (
    'itemdata' => 0,
    'login_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f9efe20e9e1_37290882')) {function content_5a7f9efe20e9e1_37290882($_smarty_tpl) {?><div class="show-wrapper">
  <div class="container">
    <div class="show-content">
      <img src="<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['image'];?>
" alt="">
      <h3><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['name'];?>
</h3>
      <b><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['headine'];?>
</b>
      <p><?php echo $_smarty_tpl->tpl_vars['itemdata']->value['description'];?>
</p>
      <b>価格：<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['value'];?>
円</b>
    </div>
  </div>
  <form class="" action="/public/cart/insert" method="post">
    <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['itemdata']->value['id'];?>
">
    <input type="hidden" name="login_id" value="<?php echo $_smarty_tpl->tpl_vars['login_id']->value;?>
">
    <input type="submit" name="submit" value="カートに入れる">
  </form>
</div>
<?php }} ?>