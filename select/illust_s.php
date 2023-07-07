<?php 
require("../libDB.php");
require ("../rader_function.php");

$db = new libDB();
$pdo = $db->getPDO();
$sql = $pdo->query("SELECT dpi_R*dpi_L as maluti, dpi_R, dpi_L, PC_id, weight,memory,storage,price,cpu,name,battery  from PC ORDER BY maluti DESC");  
$sql->execute(); /*sqlの実行*/
$result = $sql->fetchAll(); /*sqlの結果の取得*/
require_once("../pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();
$smarty->assign("result",$result);
$smarty->display("../templates/illust_s.tpl");

foreach ($result as $row) {
    $result_str = implode(", ", $row); // 各行の要素をカンマ区切りの文字列に変換
    echo $result_str . "<br>"; // 変換された文字列を出力し、改行する
}
echo "-------<br>";

// 各配列の定義
$price_array=[];
$battery_array=[];
$memory_array=[];
$weight_array=[];
$storage_array=[];

for($i=0;$i<9;$i++){
    if (isset($result[$i][7]) or isset($result[$i][10]) 
    or isset($result[$i][5]) or isset($result[$i][4]) or isset($result[$i][6])){
        array_push($price_array, $result[$i][7]);
        array_push($battery_array, $result[$i][10]);
        array_push($memory_array, $result[$i][5]);
        array_push($weight_array, $result[$i][4]);
        array_push($storage_array, $result[$i][6]);
    }
}

echo "価格の例です:".$price_array[1]."<br>";
echo "稼働時間の例です:".$battery_array[1] . "<br>";
echo "メモリの例です:".$memory_array[1] . "<br>";
echo "重さの例です:" . $weight_array[1] . "<br>";
echo "不揮発性容量の例です:" . $storage_array[1] . "<br>";


?>