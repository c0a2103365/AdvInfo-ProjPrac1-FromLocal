<?php
/* Smarty version 3.1.39, created on 2023-06-30 09:32:57
  from 'C:\xampp\htdocs\pnw\2023g01\templates\work_s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_649e8529ec7fe2_95140346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c0007f8c039411cd0424a402c24b5d61067b6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\work_s.tpl',
      1 => 1688110334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649e8529ec7fe2_95140346 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
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
