<?php
/* Smarty version 3.1.39, created on 2023-07-14 10:04:49
  from 'C:\xampp\htdocs\pnw\2023g01\templates\sign_up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64b101a13c0602_31985015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e97d36829b88f15130df0f7828c21e788d2cb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\sign_up.tpl',
      1 => 1689320717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b101a13c0602_31985015 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>アカウント作成</h1>
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