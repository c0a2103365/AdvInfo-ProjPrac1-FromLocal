<?php
/* Smarty version 3.1.39, created on 2023-06-30 07:08:04
  from 'C:\xampp\htdocs\pnw\2023g01\templates\mobile_r.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e63340bf185_37260956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f22e12de872a1acbb1d6962c737950e867304215' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\mobile_r.tpl',
      1 => 1688101679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e63340bf185_37260956 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body>
<h1>データ保存量ランキング</h1>
<form action="../ranking/mbile_r.php" method="get">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>storage</th>
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
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["storage"]);?>
<i>GB</i></td>
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
