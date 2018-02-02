<?php /* Smarty version Smarty-3.1.8, created on 2018-02-02 04:03:30
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\include\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12392435125a73d3622cbc41-98801909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee3d711f0e8d1ab92d31f1cc5a7e8f42babc952c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\include\\header.tpl',
      1 => 1517540594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12392435125a73d3622cbc41-98801909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a73d3622d1937_94114692',
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
    'junp_link' => 0,
    'junp_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d3622d1937_94114692')) {function content_5a73d3622d1937_94114692($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テンプレート</title>
  </head>
  <body>
    <header>
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
    </header>
<?php }} ?>