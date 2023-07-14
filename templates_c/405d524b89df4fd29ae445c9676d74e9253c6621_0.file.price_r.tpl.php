<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2023-07-14 06:20:02
=======
/* Smarty version 3.1.39, created on 2023-07-14 06:40:15
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
  from 'C:\xampp\htdocs\pnw\2023g01\templates\price_r.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_64b0ccf2c2a4f1_78570767',
=======
  'unifunc' => 'content_64b0d1af01c161_29026628',
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405d524b89df4fd29ae445c9676d74e9253c6621' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\price_r.tpl',
<<<<<<< HEAD
      1 => 1689226318,
=======
      1 => 1689308234,
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64b0ccf2c2a4f1_78570767 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_64b0d1af01c161_29026628 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
?><html> 
<body>
<h1>価格ランキング</h1>
<form action="../ranking/price_r.php" method="get">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>ranking</th>
            <th>name</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value[''];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
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
