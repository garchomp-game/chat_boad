<?php /* Smarty version Smarty-3.1.8, created on 2018-02-11 15:18:36
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\shop\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3811167535a7f1fadaa1af8-16983818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2a598043481b1ba285aa1de5c2efe69c9e2fab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\shop\\index.tpl',
      1 => 1518329880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3811167535a7f1fadaa1af8-16983818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a7f1fadac1303_61242364',
  'variables' => 
  array (
    'itemdata' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f1fadac1303_61242364')) {function content_5a7f1fadac1303_61242364($_smarty_tpl) {?><div class="index-wrapper">
  <div class="container">
    <div class="index-content">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
          <a href="show/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['store_id'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_medium'];?>
" alt="">
            <div class="right">
              <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
              <p><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
              <b>価格：<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
円</b>
            </div>
          </a>
        </li>
        <div class="clear"></div>
        <?php } ?>
      </ul>

    </div>
  </div>
</div>
<?php }} ?>