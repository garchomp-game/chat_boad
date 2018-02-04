<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 23:33:19
         compiled from "/home/garchomp/chat_study/application/views/templates/boad/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13429160925a75d3ec4802d8-81187463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b545e7532d0e6d4912e537e2c3d90cb71fba1e26' => 
    array (
      0 => '/home/garchomp/chat_study/application/views/templates/boad/index.tpl',
      1 => 1517754798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13429160925a75d3ec4802d8-81187463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a75d3ec4809a3_87276358',
  'variables' => 
  array (
    'comments' => 0,
    'item' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75d3ec4809a3_87276358')) {function content_5a75d3ec4809a3_87276358($_smarty_tpl) {?>

<div class="boad-wrapper">
  <div class="container">
    <div class="boad-content">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li>
          <li><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</li>
        <?php } ?>
      </ul>
    </div>

    <form class="" action="insert" method="post">
      <input type="text" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
">
      <textarea name="comment" rows="8" cols="80">

      </textarea>
      <input type="submit" name="submit" value="送信">
    </form>
  </div>
</div>
<?php }} ?>