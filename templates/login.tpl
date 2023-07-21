<html>

<head>
  <meta charset="UTF-8">
  <title>login</title>
</head>

<body>
  <link rel="stylesheet" href="css/serch.css">
  <div class="bg_pattern Paper_v2"></div>
  <h1>ログインページ</h1>
  {if $message}
  <p class="message">{$message}</p>
  {/if}
  <form action="login.php" method="post">
    <input type="text" name="user_name" placeholder="ユーザー名" required><br>
    <input type="password" name="user_pass" placeholder="パスワード" required><br>
    <input type="submit" name="login" value="ログイン"><br>
  </form>
  <a href="sign_up.php">アカウントをお持ちでない方はこちら<a></a><br>
  <button type="button" onclick="history.back()">戻る</button>