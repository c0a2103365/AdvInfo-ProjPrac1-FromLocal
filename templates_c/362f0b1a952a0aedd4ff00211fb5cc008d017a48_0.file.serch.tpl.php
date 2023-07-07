<?php
/* Smarty version 3.1.39, created on 2023-06-16 02:45:14
  from 'C:\xampp\htdocs\2023g01\templates\serch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_648bb09a7eaa54_55649937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '362f0b1a952a0aedd4ff00211fb5cc008d017a48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2023g01\\templates\\serch.tpl',
      1 => 1686876313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648bb09a7eaa54_55649937 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title>Serch</title>
</head>

<body>
    <form action="serch.php" method="post">
        <input type="text" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" placeholder="キーワードで検索" required>
        <input type="submit" name="submit" value="検索">
    </form>
    <?php echo $_smarty_tpl->tpl_vars['result_text']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
		<br>
		<br>
		<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
件見つかりました。
		<table border="1">
			<tr>
				<th>ID</th>
				<th>UserID</th>
				<th>Password</th>
			</tr>
			<!-- foreachを使って結果をループさせる -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['loop']->value["id"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['loop']->value["userid"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['loop']->value["password"];?>
</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
    <?php } else { ?>
    	<br>
    	<br>
    	<?php echo $_smarty_tpl->tpl_vars['fail_text']->value;?>

    <?php }?>
</body>

</html><?php }
}
