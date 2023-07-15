<?php

// データベースへ接続
require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

// smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign('message', '');

// アカウント作成
if (isset($_POST['signup'])) {
    $username = $_POST['user_name'];
    $password = $_POST['user_pass'];

    // パスワードのハッシュ化
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // データベースにユーザー情報を挿入
    $stmt = $pdo->prepare("INSERT INTO users (user_name, user_pass) VALUES (?, ?)");
    $stmt->execute([$username, $hashedPassword]);

    // アカウント作成成功時の処理
    $message = 'アカウントを作成しました。ログインしてください。';
    $smarty->assign('message', $message);
}

$smarty->display('templates/sign_up.tpl');

?>