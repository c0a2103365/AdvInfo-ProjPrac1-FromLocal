<?php
/* Smarty version 3.1.39, created on 2023-07-07 07:29:22
  from 'C:\xampp\htdocs\pnw\2023g01\templates\work_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a7a2b235bc32_96456375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c0007f8c039411cd0424a402c24b5d61067b6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\work_s.tpl',
      1 => 1688706769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a7a2b235bc32_96456375 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body>
<h1>仕事をする人におすすめ</h1>
<form action="../select/mobile_s.php" method="get"><?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>inch</th>
            <th>office_app</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['loop']->value["office_app"] != "なし") {?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["PC_id"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["inch"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["office_app"];?>
</td>
            </tr>
        <?php }?>
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
