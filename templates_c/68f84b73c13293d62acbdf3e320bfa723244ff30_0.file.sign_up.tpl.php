<?php
/* Smarty version 3.1.39, created on 2023-07-20 02:51:50
  from 'C:\xampp\htdocs\AdvInfo-ProjPrac1-FromLocal\templates\sign_up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64b88526087ba9_62389161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f84b73c13293d62acbdf3e320bfa723244ff30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdvInfo-ProjPrac1-FromLocal\\templates\\sign_up.tpl',
      1 => 1689585017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b88526087ba9_62389161 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/serch.css">
<div class="bg_pattern Paper_v2"></div>
<h1>アカウント作成</h1>
<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
  <p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>
<form action="sign_up.php" method="post">
  <input type="text" name="user_name" placeholder="ユーザー名" required><br>
  <input type="password" name="user_pass" placeholder="パスワード" required><br>
  <input type="submit" name="signup" value="アカウント作成">
</form>
<a href="login.php">アカウントをお持ちの方はこちら<a><?php }
}
