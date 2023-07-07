<?php
/* Smarty version 3.1.39, created on 2023-07-07 07:37:40
  from 'C:\xampp\htdocs\pnw\2023g01\templates\illust_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64a7a4a4a091d7_20596191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '375bf739f183c3db75b3e03212a6f069793a69e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\illust_s.tpl',
      1 => 1688114254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a7a4a4a091d7_20596191 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body>
<h1>イラスト楽しみたい人向け</h1>
<form action="../select/_s.php" method="get">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>dpi</th>
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
