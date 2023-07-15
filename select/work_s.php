<link rel="stylesheet" media="all" href="../css/style.css">

<?php
require("../libDB.php");
require("../rader_function.php");
require("fileop.php");

$db = new libDB(); 
$pdo = $db->getPDO(); 
$sql = $pdo->query("SELECT * from PC ORDER BY inch DESC");  
$sql->execute(); /*sqlの実行*/ 
$result = $sql->fetchAll(); /*sqlの結果の取得*/   
require_once("../pnwsmarty.php"); 
$pnw = new pnwsmarty(); 
$smarty = $pnw->getTpl(); 
$smarty->assign("result",$result);

// 各配列の定義
$price_array = [];
$battery_array = [];
$memory_array = [];
$weight_array = [];
$storage_array = [];


for ($i = 0; $i < 8; $i++) {
    if (
        isset($result[$i][7]) or isset($result[$i][10])
        or isset($result[$i][5]) or isset($result[$i][4]) or isset($result[$i][6])
    ) {
        array_push($price_array, $result[$i][9]);
        array_push($battery_array, $result[$i][7]);
        array_push($memory_array, $result[$i][12]);
        array_push($weight_array, $result[$i][3]);
        array_push($storage_array, $result[$i][13]);
    }
}

// echo "価格の例です:".$price_array[1]."<br>";
// echo "稼働時間の例です:".$battery_array[1] . "<br>";
// echo "メモリの例です:".$memory_array[1] . "<br>";
// echo "重さの例です:" . $weight_array[1] . "<br>";
// echo "不揮発性容量の例です:" . $storage_array[1] . "<br>";

$price_dev_val_array = [];
$battery_dev_val_array = [];
$memory_dev_val_array = [];
$weight_dev_val_array = [];
$storage_dev_val_array = [];

for ($i = 0; $i < 8; $i++) {
    array_push($price_dev_val_array, (int)reverse_val(dev_val($price_array[$i], average($price_array), std_dev(dispersion($price_array)))));
    array_push($battery_dev_val_array, (int)dev_val($battery_array[$i], average($battery_array), std_dev(dispersion($battery_array))));
    array_push($memory_dev_val_array, (int)reverse_val(dev_val($memory_array[$i], average($memory_array), std_dev(dispersion($memory_array)))));
    array_push($weight_dev_val_array, (int)reverse_val(dev_val($weight_array[$i], average($weight_array), std_dev(dispersion($weight_array)))));
    array_push($storage_dev_val_array, (int)reverse_val(dev_val($storage_array[$i], average($storage_array), std_dev(dispersion($storage_array)))));
}

delete_file();

$picture_array = [];

for ($i = 0; $i < 8; $i++) {
    $raderchart_image = radercart(
        $price_dev_val_array[$i],
        $weight_dev_val_array[$i],
        $battery_dev_val_array[$i],
        $memory_dev_val_array[$i],
        $storage_dev_val_array[$i],
        $i
    );
    $picture = '<img src="' . $raderchart_image . '" alt="Radar Chart">';
    array_push($picture_array, $picture);
    // echo $picture;
}

$smarty->assign("picture_array", $picture_array);
$smarty->display("../templates/work_s.tpl");  

?>