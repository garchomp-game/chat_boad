<?php /* Smarty version Smarty-3.1.8, created on 2018-02-02 03:52:36
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\include\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7518984365a73d0b1947391-66373077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b855d5384e0fed455af16274dbde97583fd0e08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\include\\head.tpl',
      1 => 1517539955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7518984365a73d0b1947391-66373077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5a73d0b1948c19_76389316',
  'variables' => 
  array (
    'base_url' => 0,
    'junp_link' => 0,
    'junp_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d0b1948c19_76389316')) {function content_5a73d0b1948c19_76389316($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>チャット掲示板</title>
  </head>
  <body>
    <header>
      <div class="container">
        <h1>チャット掲示板</h1>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['junp_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['junp_name']->value;?>
</a></li>
        </ul>
      </div>
    </header>
<?php }} ?>