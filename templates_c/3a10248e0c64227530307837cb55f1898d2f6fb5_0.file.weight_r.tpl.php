<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2023-07-13 06:43:59
=======
/* Smarty version 3.1.39, created on 2023-07-07 10:52:44
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
  from 'C:\xampp\htdocs\pnw\2023g01\templates\weight_r.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_64af810f91f843_41264305',
=======
  'unifunc' => 'content_64a7d25c117346_49384698',
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a10248e0c64227530307837cb55f1898d2f6fb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\weight_r.tpl',
<<<<<<< HEAD
      1 => 1688713374,
=======
      1 => 1688719961,
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_64af810f91f843_41264305 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_64a7d25c117346_49384698 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> e3520343d58ca095a1976552eb4532204ebef42e
?><html> 
<body>
<h1>重さランキング</h1>
<form action="../ranking/weight_r.php" method="get">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>ranking</th>
            <th>name</th>
            <th>weight</th>
            <th>battery</th>
            <th>price</th>
            <th>memory</th>
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
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["weight"],2);?>
<i>kg</i></td> 
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["battery"],1);?>
<i>h</i></td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["price"]);?>
<i>円</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
</td>
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
