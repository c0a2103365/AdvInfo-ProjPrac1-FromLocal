<?php
/* Smarty version 3.1.39, created on 2023-07-14 10:52:43
  from 'C:\xampp\htdocs\AdvInfo-ProjPrac1-FromLocal\templates\illust_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64b10cdbdc8837_68444181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7522d52fc6b138d318a3f85638a83604a8808881' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdvInfo-ProjPrac1-FromLocal\\templates\\illust_s.tpl',
      1 => 1689321121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b10cdbdc8837_68444181 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<link rel="icon" href="../images/favicon.ico">  
<body>
<h1>画質を求める人</h1>
<form action="../select/_s.php" method="get">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>dpi</th>
            <th>price</th>
            <th>battery</th>
            <th>memory</th>
            <th>weight</th>
            <th>storage</th>
            <th>cpu</th>

        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["PC_id"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["dpi_L"];?>
<i>x</i><?php echo $_smarty_tpl->tpl_vars['loop']->value["dpi_R"];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["price"]);?>
<i>円</i></td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["battery"],1);?>
<i>h</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
<i>GB</i></td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["weight"],2);?>
<i>kg</i></td> 
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["storage"]);?>
<i>GB</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["cpu"];?>
</td>

        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php } else { ?>
    "sippai"
<?php }?>



</form>

</body>
</html><?php }
}
