<?php
<<<<<<< Updated upstream
/* Smarty version 3.1.39, created on 2023-07-14 08:02:30
=======
/* Smarty version 3.1.39, created on 2023-07-14 07:43:19
>>>>>>> Stashed changes
  from 'C:\xampp\htdocs\pnw\2023g01\templates\serch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< Updated upstream
  'unifunc' => 'content_64b0e4f68c1ef1_06456182',
=======
  'unifunc' => 'content_64b0e077089736_65553740',
>>>>>>> Stashed changes
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ea209eda79274d30310835a74de2a5a3a4aa35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\serch.tpl',
<<<<<<< Updated upstream
      1 => 1689311782,
=======
      1 => 1689311332,
>>>>>>> Stashed changes
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< Updated upstream
function content_64b0e4f68c1ef1_06456182 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_64b0e077089736_65553740 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> Stashed changes
?><html>

<head>
    <title>Serch</title>
</head>

<body>
    <form action="serch.php" method="get">
        <input style="font-size: 20px; width: 400px; padding: 1em 0.5em; line-height: 1; margin: 0.5em 0;" type="text" name="serch_key" value="<?php echo $_smarty_tpl->tpl_vars['serch_key']->value;?>
" placeholder="キーワードで検索" required>
        <input style="padding: 1.5em 2em; line-height: 10; margin: 0.5em 1em;" type="submit" name="submit" value="検索">
    </form>
    <p style="font-size: 200%;"><?php echo $_smarty_tpl->tpl_vars['result_text']->value;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
		<br>
		<p style="font-size: 200%;"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
件見つかりました。</p>
		<p></p>
		<div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: top;">
			<!-- foreachを使って結果をループさせる -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
			<div style="border: #28CF75 outset 6px; border-radius:20px; font-size: 100%; margin-bottom: 50px; padding: 15px; width: 450px;">
				<input class="choice" style="cursor: pointer; transform: scale(3); margin: 0 15px 0 15px;" type="checkbox" name="choice[]" value="選択"> 選択 
				<img src="<?php echo $_smarty_tpl->tpl_vars['loop']->value["image_path"];?>
" style="margin: auto; display: block; padding: 15px; width: 300px;">
				<i>製品名　：</i>
				<i><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
</i>
				<br>
				<i>製造会社：</i>
				<i><?php echo $_smarty_tpl->tpl_vars['loop']->value["maker"];?>
</i>
				<br>
				<i>価格　　：</i>
				<i><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["price"]);?>
円</i>
				<br>
				<i>販売台数：</i>
				<i><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["sales"]);?>
台</i>
				<br>
				<i>売上金額：</i>
				<i><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["earnings"]);?>
円</i>
				<br>
				<i>稼働時間：</i>
				<i><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["battery"],1);?>
h</i>
			</div>
			<br>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
    <?php } else { ?>
    	<br>
    	<br>
    	<p style="font-size: 200%;"><?php echo $_smarty_tpl->tpl_vars['fail_text']->value;?>
</p>
    <?php }?>
</body>

</html><?php }
}
