<?php

$user_name = "";
$items = null;

session_start();

if (isset($_SESSION["user_name"])) {
    $user_name = $_SESSION["user_name"];
}

// データベースへ接続
require("libDB.php");
if (isset($_GET["serch_key"])){
    $serch_key = $_GET["serch_key"];
} else {
    $serch_key = null;
}

$db = new libDB();
// $options = [];
$pdo = $db->getPDO();
$sql = $pdo->query("SELECT * FROM PC LEFT OUTER JOIN Earnings ON PC.PC_id = Earnings.PC_id JOIN image ON PC.PC_id = image.PC_id WHERE name LIKE  '%" . $serch_key . "%'"); //SQL文を実行して、結果を$stmtに代入する。
if ($serch_key == "ALL") {
    $sql = $pdo->query("SELECT * FROM PC LEFT OUTER JOIN Earnings ON PC.PC_id = Earnings.PC_id JOIN image ON PC.PC_id = image.PC_id");
}

// SQL文の実行
$sql->execute();
// SQL実行結果を取得
$result = $sql->fetchAll();

// 取得したPC情報を配列に変換
$pcData = $sql->fetchAll(PDO::FETCH_ASSOC);

// smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign("result", $result);

// 選択されたアイテムの値を受け取る
if (isset($_GET["choice"])) {
    $selectedItems = $_GET['choice'];

    // アイテムの情報を取得
    $items = array();

    foreach ($selectedItems as $selectedItem) {
        // データベースからアイテムの情報を取得
        $stmt = $pdo->prepare("SELECT * FROM PC WHERE PC_id = :id");
        $stmt->bindParam(':id', $selectedItem);
        $stmt->execute();
        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        // 取得したアイテムの情報を配列に格納
        if ($item) {
            $items[] = $item;
        }
    };
} else {

}

// 選択されたアイテムの値を受け取る
$selectedItems = isset($_POST['selectedItems']) ? json_decode($_POST['selectedItems'], true) : array();

$_SESSION["serch"] = $serch_key;
$smarty->assign("serch", $serch_key);
$smarty->assign("serch_key", $serch_key);
$smarty->assign("count", count($result));
$smarty->assign("user_name", $user_name);
$smarty->assign('selectedItems', $selectedItems);
$smarty->assign('items', $items);

$smarty->display("templates/serch.tpl")

?>