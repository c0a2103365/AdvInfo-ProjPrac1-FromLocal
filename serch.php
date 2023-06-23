<?php

$userid = "";
session_start();

if (isset($_SESSION["serch"])) {
    $userid = $_SESSION["serch"];
} else {
    $_GET["serch_key"] = "ALL";
}

// データベースへ接続
require("libDB.php");
$serch_key = $_GET["serch_key"];

$db = new libDB();
// $options = [];
$pdo = $db->getPDO();
$sql = $pdo->query("SELECT * FROM PC LEFT OUTER JOIN Earnings ON PC.PC_id = Earnings.PC_id JOIN image ON PC.PC_id = image.PC_id WHERE name LIKE  '%" . $_GET["serch_key"] . "%'"); //SQL文を実行して、結果を$stmtに代入する。
if ($_GET["serch_key"] == "ALL") {
    $sql = $pdo->query("SELECT * FROM PC LEFT OUTER JOIN Earnings ON PC.PC_id = Earnings.PC_id JOIN image ON PC.PC_id = image.PC_id");
}

// SQL文の実行
$sql->execute();
// SQL実行結果を取得
$result = $sql->fetchAll();

// smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign("result", $result);

$_SESSION["serch"] = $serch_key;
$smarty->assign("serch", $serch_key);

$smarty->assign("serch_key", $serch_key);

$smarty->assign("result_text", "キーワード'" . $serch_key . "'で検索しています。");

if (!$result) {
    $smarty->assign("fail_text", "検索結果が見つかりませんでした。");
}

if (!$serch_key or $_GET['serch_key'] == "ALL") {
    $smarty->assign("result_text", "全データを表示しています。");
}

$smarty->assign("count", count($result));

$smarty->display("templates/serch.tpl")

?>