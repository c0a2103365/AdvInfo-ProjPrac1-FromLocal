<h1>アカウント作成</h1>
{if $message}
  <p class="message">{$message}</p>
{/if}
<form action="sign_up.php" method="post">
  <input type="text" name="user_name" placeholder="ユーザー名" required><br>
  <input type="password" name="user_pass" placeholder="パスワード" required><br>
  <input type="submit" name="signup" value="アカウント作成">
</form>
<a href="login.php">アカウントをお持ちの方はこちら<a>