<link rel="stylesheet" href="css/serch.css">
<div class="bg_pattern Paper_v2"></div>
    <link rel="stylesheet" href="css/serch.css">
    <link rel="stylesheet" media="all" href="../css/style2.css">
    <div class="bg_pattern Paper_v2"></div>
<h1>アカウント作成</h1>
{if $message}
  <p class="message">{$message}</p>
{/if}
<form action="sign_up.php" method="post">
  <input type="text" name="user_name" placeholder="ユーザー名" required><br>
  <input type="password" name="user_pass" placeholder="パスワード" required><br>
  <input type="submit" name="signup" value="アカウント作成">
</form>
<a href="login.php">アカウントをお持ちの方はこちら<a><br>
  <button type="button" onclick="history.back()">戻る</button>>