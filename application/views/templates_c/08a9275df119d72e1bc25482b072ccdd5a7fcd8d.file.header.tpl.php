<?php /* Smarty version Smarty-3.1.8, created on 2018-02-04 00:22:25
         compiled from "/home/garchomp/chat_study/application/views/templates/include/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15062878775a75d3b19f12a7-38135469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a9275df119d72e1bc25482b072ccdd5a7fcd8d' => 
    array (
      0 => '/home/garchomp/chat_study/application/views/templates/include/header.tpl',
      1 => 1517661900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15062878775a75d3b19f12a7-38135469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style' => 0,
    'title' => 0,
    'base_url' => 0,
    'junp_link' => 0,
    'junp_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a75d3b1cc3669_38792380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75d3b1cc3669_38792380')) {function content_5a75d3b1cc3669_38792380($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>テンプレート</title>
  
  <?php echo link_tag('sass_project/base.css');?>

  <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['style']->value)===null||$tmp==='' ? '' : $tmp)==''){?>
  <?php echo link_tag($_smarty_tpl->tpl_vars['style']->value);?>

  <?php }?>
  <script src="../js/base.js" charset="utf-8"></script>
</head>
<body>
  <header>
    <div class="container"> 
      <div class="container">
        
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <ul>
          
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['junp_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['junp_name']->value;?>
へ</a></li>
        </ul>
      </div>
    </div>
  </header>
<?php }} ?>