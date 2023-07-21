<html>

<head>
    <meta charset="UTF-8">
    <title>account</title>
</head>

<body>
    <link rel="stylesheet" href="css/serch.css">
    <link rel="stylesheet" media="all" href="../css/style2.css">
    <div class="bg_pattern Paper_v2"></div>

    <h1>アカウント情報</h1>
    <table border="1">
        <tr>
            <th>User_ID</th>
            <th>User_Name</th>
        </tr>
        <tr>
            <td>{$user_id}</td>
            <td>{$user_name}</td>
        </tr>
    </table>
    {if isset($message)}
    <p class="message">{$message}</p>
    {/if}
    <form action="account.php" method="post">
        <input type="text" name="new_user_name" placeholder="New_User_Name" value="{$user_name}" required><br>
        <input type="password" name="new_user_pass" placeholder="New_Password" required><br><br>
        <input type="submit" name="update" value="アカウント更新">
    </form>
    <!-- アカウント削除ボタンのフォーム -->
    <form action="" method="post" onsubmit="return confirmDelete();">
        <input type="submit" name="delete" value="アカウント削除">
    </form>
    <!-- ログアウトボタンのフォーム -->
    <form action="" method="post" onsubmit="return confirmLogout();">
        <input type="submit" name="logout" value="ログアウト">
    </form>
    <!-- 確認メッセージの表示と処理 -->
    <script>
        function confirmLogout() {
            return confirm('本当にログアウトしますか？');
        }
        function confirmDelete() {
            return confirm('本当に削除しますか？');
        }
    </script>
    <a href="serch.php">製品を検索する</a><br>
  <button type="button" onclick="history.back()">戻る</button>
    
</body>

</html>