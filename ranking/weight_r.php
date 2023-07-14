<?php require("../libDB.php");  
$db = new libDB(); 
$pdo = $db->getPDO(); 
$sql = $pdo->query("SELECT * from PC ORDER BY weight");
$count=0;
while($count<9){
    $count ++;
}
$sql->execute();/*sqlの実行*/ 
$result = $sql->fetchAll(); /*sqlの結果の取得*/   
require_once("../pnwsmarty.php"); 
$pnw = new pnwsmarty(); 
$smarty = $pnw->getTpl(); 
$smarty->assign("result",$result);  
$smarty->display("../templates/weight_r.tpl");  
?>