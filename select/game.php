<html>
<link rel="stylesheet" media="all" href="../css/style.css">
        
<body>
<?php
require("../libDB.php");

$db = new libDB();
$pdo = $db->getPDO();
$sql = $pdo->query("SELECT * from PC");

$sql->execute(); /*sqlの実行*/
$result = $sql->fetchAll();/*sqlの結果の取得*/


require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();
$smarty->assign("result",$result);

$smarty->display("../templates/game.tpl");
print_r($result[1]);




    
?>
</body>
</html>
