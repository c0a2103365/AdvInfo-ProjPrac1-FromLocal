<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2023-07-13 07:33:50
=======
/* Smarty version 3.1.39, created on 2023-07-07 10:18:31
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
  from 'C:\xampp\htdocs\pnw\2023g01\templates\illust_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_64af8cbe225dd7_04979567',
=======
  'unifunc' => 'content_64a7ca57a5c671_23639481',
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '375bf739f183c3db75b3e03212a6f069793a69e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\illust_s.tpl',
<<<<<<< HEAD
      1 => 1689226290,
=======
      1 => 1688717606,
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64af8cbe225dd7_04979567 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_64a7ca57a5c671_23639481 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
?><html> 
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
<i>x</i><?php echo $_smarty_tpl->tpl_vars['loop']->value["dpi_L"];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["price"]);?>
<i>円</i></td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["battery"],1);?>
<i>h</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
<<<<<<< HEAD
<i>GB</i></td>
=======
</td>
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
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
