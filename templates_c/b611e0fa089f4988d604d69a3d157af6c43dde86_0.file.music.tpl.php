<?php
/* Smarty version 3.1.39, created on 2023-06-30 09:19:51
  from 'C:\xampp\htdocs\pnw\2023g01\templates\music.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e82178a93b8_93288247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b611e0fa089f4988d604d69a3d157af6c43dde86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\music.tpl',
      1 => 1688109569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e82178a93b8_93288247 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body>
<link rel="stylesheet"  href="../css/style.css">
<h1>PCで音楽を聞きたい人</h1>
<form action="weight_r.php" method="GET">
<?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>　
            <th>name</th>    
            <th>weight</th>
            <th>battery</th>
            <th>memory</th>
            <th>storage</th>
            <th>price</th>
            
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
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["weight"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["battery"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["storage"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["price"];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php } else { ?>
    <p>"sippai"</p>
<?php }?>
    
</form>

</body>
</html><?php }
}
