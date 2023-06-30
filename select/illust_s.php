<?php require("../libDB.php");  
$db = new libDB(); 
$pdo = $db->getPDO(); 
$sql = $pdo->query("SELECT dpi_R*dpi_L as maluti, dpi_R, dpi_L, PC_id, name  from PC ORDER BY maluti DESC");  
$sql->execute(); /*sqlの実行*/ 
$result = $sql->fetchAll(); /*sqlの結果の取得*/   
require_once("../pnwsmarty.php"); 
$pnw = new pnwsmarty(); 
$smarty = $pnw->getTpl(); 
$smarty->assign("result",$result);  
$smarty->display("../templates/illust_s.tpl");  
?>