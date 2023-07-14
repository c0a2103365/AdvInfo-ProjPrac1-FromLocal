<?php

// ユーザ名、パスワードの初期化
$user_name = "";
$user_pass = "";

// セッションの開始
session_start();

// データベースへ接続
require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

// smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign('message', '');

// ログイン
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

    // ユーザーIDの取得
    $stmt = $pdo->prepare("SELECT user_id FROM users WHERE user_name = ?");
    $stmt->execute([$user_name]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['user_id'];

    // ユーザー情報の取得
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_name = ?");
    $stmt->execute([$user_name]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // パスワードの照合
    if ($user && password_verify($user_pass, $user['user_pass'])) {
        // ログイン成功時の処理
        $message = 'ログインに成功しました。';
        $smarty->assign('message', $message);

        // アカウント情報をセッションに保存
        $_SESSION["user_id"] = $user_id;
        $_SESSION["user_name"] = $user_name;
        $_SESSION["user_pass"] = $user_pass;

        // 出力バッファリングを有効にし、リダイレクト処理
        ob_start();
        header('Location: account.php');
        ob_end_flush();
        exit();

    } else {
        // ログイン失敗時の処理
        $message = 'ログインに失敗しました。ユーザー名とパスワードを確認してください。';
        $smarty->assign('message', $message);
    }
}

$smarty->display('templates/login.tpl');

?>
