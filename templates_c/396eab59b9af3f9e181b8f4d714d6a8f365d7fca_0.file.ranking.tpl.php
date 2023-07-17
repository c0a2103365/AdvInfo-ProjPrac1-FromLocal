<?php
/* Smarty version 3.1.39, created on 2023-07-17 02:58:07
  from 'C:\xampp\htdocs\AdvInfo-ProjPrac1-FromLocal\templates\ranking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64b4921fefc119_89466923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396eab59b9af3f9e181b8f4d714d6a8f365d7fca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdvInfo-ProjPrac1-FromLocal\\templates\\ranking.tpl',
      1 => 1689554780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b4921fefc119_89466923 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<link rel="icon" href="../images/favicon.ico"> 
<body>
<link rel="stylesheet" media="all" href="../css/style2.css">
<form action="../ranking/ranking.php" method="GET">
</form>
<div class="bg_pattern Paper_v2"></div>

<h2>ランキングページ</h2><br/>
<ul>
    <li><a class="link" href= "../ranking/weight_r.php"," >重さランキング</a></li>
    <li><a class="link" href= "../ranking/price_r.php"," >価格ランキング</a></li>
    <li><a class="link" href= "../ranking/mobile_r.php"," >データ保存量ランキング</a></li>
    <li><a class="link" href= "../ranking/battery_r.php"," >稼働時間ランキング</a></li>


</ul>
</body>
</html><?php }
}
