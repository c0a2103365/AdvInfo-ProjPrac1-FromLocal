<?php
<<<<<<< HEAD:templates_c/33f80e723b619b7d785e21a147dee987ba8e7a26_0.file.battery_r.tpl.php
/* Smarty version 3.1.39, created on 2023-07-14 09:38:18
  from 'C:\xampp\htdocs\pnw\2023g01\templates\battery_r.tpl' */
=======
/* Smarty version 3.1.39, created on 2023-07-14 07:09:02
  from 'C:\xampp\htdocs\AdvInfo-ProjPrac1-FromLocal\templates\mobile_s.tpl' */
>>>>>>> 7e7a67aad66e3c038767a2980bc68f77bbc96e89:templates_c/e6560baca0766b094950a1a402d9824f265530d5_0.file.mobile_s.tpl.php

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD:templates_c/33f80e723b619b7d785e21a147dee987ba8e7a26_0.file.battery_r.tpl.php
  'unifunc' => 'content_64b0fb6a497cb6_92470766',
=======
  'unifunc' => 'content_64b0d86e744083_76998450',
>>>>>>> 7e7a67aad66e3c038767a2980bc68f77bbc96e89:templates_c/e6560baca0766b094950a1a402d9824f265530d5_0.file.mobile_s.tpl.php
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6560baca0766b094950a1a402d9824f265530d5' => 
    array (
<<<<<<< HEAD:templates_c/33f80e723b619b7d785e21a147dee987ba8e7a26_0.file.battery_r.tpl.php
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\battery_r.tpl',
      1 => 1689320295,
=======
      0 => 'C:\\xampp\\htdocs\\AdvInfo-ProjPrac1-FromLocal\\templates\\mobile_s.tpl',
      1 => 1689311129,
>>>>>>> 7e7a67aad66e3c038767a2980bc68f77bbc96e89:templates_c/e6560baca0766b094950a1a402d9824f265530d5_0.file.mobile_s.tpl.php
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD:templates_c/33f80e723b619b7d785e21a147dee987ba8e7a26_0.file.battery_r.tpl.php
function content_64b0fb6a497cb6_92470766 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<link rel="icon" href="../images/favicon.ico">   
=======
function content_64b0d86e744083_76998450 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
 
>>>>>>> 7e7a67aad66e3c038767a2980bc68f77bbc96e89:templates_c/e6560baca0766b094950a1a402d9824f265530d5_0.file.mobile_s.tpl.php
<body>
<h1>持ち運びにおすすめ</h1>
<form action="../select/mobile_s.php" method="get">
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
            <th>cpu</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["name"];?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['loop']->value["weight"],2);?>
<i>kg</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["battery"];?>
<i>h</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["memory"];?>
<i>GB</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["storage"];?>
<i>GB</i></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["price"];?>
<i>円 </i></td></td>
            <td><?php echo $_smarty_tpl->tpl_vars['loop']->value["cpu"];?>
</td>
            
        </tr>
        <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>

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
