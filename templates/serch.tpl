<html>

<head>
    <title>Serch</title>
</head>

<body>
    <form action="serch.php" method="get">
        <input style="width: 400px; padding: 1em 0.5em; line-height: 1;" margin: 0.5em 0; type="text" name="serch_key" value="{$serch_key}" placeholder="キーワードで検索" required>
        <input style="padding: 1em 0.5em; line-height: 10;" margin: 0.5em 0; type="submit" name="submit" value="検索">
    </form>
    <p style="font-size: 200%;">{$result_text}</p>
    {if $result}
		<br>
		<p style="font-size: 200%;">{$count}件見つかりました。</p>
		<p></p>
		<div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: top;">
			<!-- foreachを使って結果をループさせる -->
			{foreach $result as $loop}
			<div style="border: #28CF75 outset 6px; border-radius:20px; font-size: 100%; margin-bottom: 50px; padding: 15px; width: 450px;">
				<img src="{$loop["image_path"]}" style="margin: auto; display: block; padding: 15px; width: 300px;">
				<i>製品名　：</i>
				<i>{$loop["name"]}</i>
				<br>
				<i>製造会社：</i>
				<i>{$loop["maker"]}</i>
				<br>
				<i>価格　　：</i>
				<i>{number_format($loop["price"])}円</i>
				<br>
				<i>販売台数：</i>
				<i>{number_format($loop["sales"])}台</i>
				<br>
				<i>売上金額：</i>
				<i>{number_format($loop["earnings"])}円</i>
				<br>
				<i>稼働時間：</i>
				<i>{number_format($loop["battery"], 1)}h</i>
			</div>
			<br>
			{/foreach}
		</div>
    {else}
    	<br>
    	<br>
    	{$fail_text}
    {/if}
</body>

</html>