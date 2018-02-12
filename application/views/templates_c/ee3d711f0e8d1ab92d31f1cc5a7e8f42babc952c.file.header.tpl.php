<?php /* Smarty version Smarty-3.1.8, created on 2018-02-12 09:09:11
         compiled from "C:\xampp\htdocs\chat_study\application\views/templates\include\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12392435125a73d3622cbc41-98801909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee3d711f0e8d1ab92d31f1cc5a7e8f42babc952c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chat_study\\application\\views/templates\\include\\header.tpl',
      1 => 1518394150,
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
    'style' => 0,
    'title' => 0,
    'base_url' => 0,
    'login_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a73d3622d1937_94114692')) {function content_5a73d3622d1937_94114692($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>テンプレート</title>
  
  <?php echo link_tag("css/base.css");?>

  <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['style']->value)===null||$tmp==='' ? '' : $tmp)==''){?>
  <?php echo link_tag("css/".($_smarty_tpl->tpl_vars['style']->value).".css");?>

  <?php }?>
  <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="../js/base.js" charset="utf-8"></script>
</head>
<body>
  <header>
    <div class="container">
      <div class="container">
        
        <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
</h1>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
shop/index">ショップへ</a></li>
          
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/home/index">ホームへ</a></li>
          <?php if ($_smarty_tpl->tpl_vars['login_id']->value){?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
cart/show">カートへ</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
boad/index">掲示板へ</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/logout_form">ログアウト</a></li>
          <?php }else{ ?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/login_form">ログイン</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login/new">新規アカウント作成</a></li>
          <?php }?>
        </ul>
      </div>
    </div>
  </header>
<?php }} ?>