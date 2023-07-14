<?php

// データベースへ接続
require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

// セッションの開始
session_start();

// ログイン状態の確認
if (!isset($_SESSION['user_name'])) {
    // ログインしていない場合は、ログインページにリダイレクトなどの処理を行う
    header('Location: login.php');
    exit();
}

// メッセージの初期化
$message = '';

// ユーザー名の取得
$user_name = $_SESSION['user_name'];

// ユーザーIDの取得
$user_id = $_SESSION['user_id'];

$user_pass = $_SESSION['user_pass'];

// アカウント情報の取得（例としてusersテーブルを使用する）
$stmt = $pdo->prepare("SELECT * FROM users WHERE user_id = ?");
$stmt->execute([$user_id]);
$account = $stmt->fetch(PDO::FETCH_ASSOC);

// smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

$smarty->assign("user_id", $user_id);  // ユーザーIDの割り当て
$smarty->assign("user_name", $user_name);  // ユーザー名の割り当て
$smarty->assign("user_pass", $user_pass);  // パスワードの割り当て

// アカウント情報の更新
if (isset($_POST['update'])) {
    $user_name = $_POST['new_user_name'];
    $user_pass = $_POST['new_user_pass'];

    // 新しいパスワードのハッシュ化
    $hashedPassword = password_hash($user_pass, PASSWORD_DEFAULT);

    // データベースのユーザーアカウントを更新
    $stmt = $pdo->prepare("UPDATE users SET user_name = ?, user_pass = ? WHERE user_id = ?");
    $stmt->execute([$user_name, $hashedPassword, $user_id]);

    // アカウント情報更新成功時の処理
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user_pass'] = $user_pass;
    $message = 'アカウント情報を更新しました。';
    $smarty->assign('message', $message);

    $smarty->assign("user_name", $user_name);  // ユーザー名の割り当て
    $smarty->assign("user_pass", $user_pass);  // パスワードの割り当て
}

// アカウント削除
if (isset($_POST['delete'])) {
    // JavaScriptのコードを実行するフラグをセッションに保存
    $_SESSION['confirm_Delete'] = true;
}

// アカウント削除のフラグがセットされている場合にログアウト処理を実行
if (isset($_SESSION['confirm_Delete'])) {

    // データベースからユーザーアカウントを削除
    $stmt = $pdo->prepare("DELETE FROM users WHERE user_id = ?, user_name = ?, user_pass = ?");
    $stmt->execute([$user_id, $user_name, $user_pass]);

    // アカウント削除成功時の処理
    $message = 'アカウントを削除しました。';
    $smarty->assign('message', $message);

    // セッションの破棄
    session_destroy();

    // ログインページにリダイレクト
    header('Location: login.php');
    exit();
}

// ログアウト処理
if (isset($_POST['logout'])) {
    // JavaScriptのコードを実行するフラグをセッションに保存
    $_SESSION['confirm_logout'] = true;
}

// ログアウト確認のフラグがセットされている場合にログアウト処理を実行
if (isset($_SESSION['confirm_logout'])) {
    // セッションの破棄
    session_destroy();

    // ログアウト後の処理
    header('Location: login.php');
    exit();
}

// フラグをリセット
unset($_SESSION['confirm_logout']);

// テンプレートにデータを割り当てて表示
$smarty->assign("message", $message);  // メッセージの割り当て
$smarty->display('templates/account.tpl');

?>