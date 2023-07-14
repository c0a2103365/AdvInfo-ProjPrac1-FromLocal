<link rel="stylesheet" media="all" href="../css/style.css">
<?php 
require("../libDB.php");  
$db = new libDB(); 
$pdo = $db->getPDO(); 
$sql = $pdo->query("SELECT * from PC ORDER BY price");  
$sql->execute(); //sqlの実行
$result = $sql->fetchAll(); //sqlの結果の取得
require_once("../pnwsmarty.php"); 
$pnw = new pnwsmarty(); 
$smarty = $pnw->getTpl();
$i=1 ;
$smarty->assign("i",$i); 
$smarty->assign("result",$result);  
$smarty->display("../templates/price_r.tpl");  
?>