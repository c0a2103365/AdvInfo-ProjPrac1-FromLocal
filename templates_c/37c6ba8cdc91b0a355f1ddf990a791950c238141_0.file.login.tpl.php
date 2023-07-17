<?php
/* Smarty version 3.1.39, created on 2023-07-17 08:33:21
  from 'C:\xampp\htdocs\pnw\2023g01\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64b4e0b1bb2ea0_11100181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37c6ba8cdc91b0a355f1ddf990a791950c238141' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\login.tpl',
      1 => 1689575594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b4e0b1bb2ea0_11100181 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
  <meta charset="UTF-8">
  <title>login</title>
</head>

<body>
  <link rel="stylesheet" href="css/serch.css">
  <div class="bg_pattern Paper_v2"></div>
  <h1>ログインページ</h1>
  <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
  <p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
  <?php }?>
  <form action="login.php" method="post">
    <input type="text" name="user_name" placeholder="ユーザー名" required><br>
    <input type="password" name="user_pass" placeholder="パスワード" required><br>
    <input type="submit" name="login" value="ログイン"><br>
  </form>
  <a href="sign_up.php">アカウントをお持ちでない方はこちら<a></a><?php }
}
