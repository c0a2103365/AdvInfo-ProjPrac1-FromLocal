<?php
/* Smarty version 3.1.39, created on 2023-07-14 09:07:59
  from 'C:\xampp\htdocs\pnw\2023g01\templates\ranking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64b0f44f348234_27765692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e22a5b456b42fad4a227be77686877a15898a8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pnw\\2023g01\\templates\\ranking.tpl',
      1 => 1689318474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b0f44f348234_27765692 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
    
<body>
<link rel="stylesheet" media="all" href="../css/style2.css">
<form action="../ranking/ranking.php" method="GET">
</form>

<h2>ランキングページ</h2><br/>
<ul>
    <li><a href= "../ranking/weight_r.php"," >重さランキング</a></li>
    <li><a href= "../ranking/price_r.php"," >価格ランキング</a></li>
    <li><a href= "../ranking/mobile_r.php"," >データ保存量ランキング</a></li>
    <li><a href= "../ranking/battery_r.php"," >稼働時間ランキング</a></li>


</ul>
</body>
</html><?php }
}
