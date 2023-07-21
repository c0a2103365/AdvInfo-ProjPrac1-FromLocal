<html>

<head>
    <title>Serch</title>
</head>

<!-- ポップアップの内容を表示 -->
<div class="overlay" style="display: none;">
	<div class="popup">
		<!-- ポップアップの内容 -->
		<h2>製品を選んで比較</h2>
		<!-- foreachを使って結果をループさせる -->
		{foreach $items as $item}
		<div style="display: flex; justify-content: center; align-items: center; overflow: hidden;">
			<div style="margin: 30px; border: #6cb4e4 outset 6px; border-radius:20px; font-size: 150%; margin-bottom: 50px; padding: 20px; width: 500px;">
				<p><ruby><rb>製品名</rb><rp> (</rp><rt>せいひんめい</rt><rp>) </rp></ruby>　：{$item.name}</p>
				<p><ruby><rb>製造会社</rb><rp> (</rp><rt>せいぞうがいしゃ</rt><rp>) </rp></ruby>：{$item.maker}</p>
				<p><ruby><rb>稼</rb><rp> (</rp><rt>か</rt><rp>) </rp><rb>働</rb><rp> (</rp><rt>どう</rt><rp>) </rp><rb>時</rb><rp> (</rp><rt>じ</rt><rp>) </rp><rb>間</rb><rp> (</rp><rt>かん</rt><rp>) </rp></ruby>：{$item.battery}h</p>
				<p><ruby><rb>重</rb><rp> (</rp><rt>おも</rt><rp>) </rp></ruby>さ　　：{$item.weight}kg</p>
				<p><ruby><rb>価</rb><rp> (</rp><rt>か</rt><rp>) </rp><rb>格</rb><rp> (</rp><rt>かく</rt><rp>) </rp></ruby>　　：{number_format($item.price)}円</p>
			</div>
		</div>
		{/foreach}
		<button id="closeButton">閉じる</button>
	</div>
</div>

<body>
	<div class="bg_pattern Paper_v2"></div>
	<link rel="stylesheet" href="css/serch.css">
	<link rel="stylesheet" href="css/ruby.css">
	{if $user_name}
		<p>{$user_name}さんがログインしています。<br>
			<a href="account.php">アカウント情報はこちら</a>
		</p>	
	{else}
		<p>ゲストユーザーさんです。<br>
			<a class="link" href="login.php">ログインはこちら</a>
		</p>
	{/if}
	<div class="switchArea">
        <input type="checkbox" id="switch1" href="javascript:void(0)" onclick="show_block();">
        <label for="switch1"><span></span></label>
        <div id="swImg"></div>
        <span data-off="ルビOFF" data-on="ルビON"></span>
    </div>
    <script>
        function show_block() {
            document.body.classList.toggle('ruby_flag');
        }
    </script>
	<p id="message"></p>

    <form action="serch.php" method="GET">
	<div class="search_box">
        <input type="text" name="serch_key" value="{$serch_key}" placeholder="ここにキーワード" required>
    </div>
	{if !$serch_key or $serch_key == "ALL"}
    	<p><ruby><rb>全</rb><rp> (</rp><rt>ぜん</rt><rp>) </rp></ruby>データを<ruby><rb>表示</rb><rp> (</rp><rt>ひょうじ</rt><rp>) </rp></ruby>しています。</p>
	{else}
		<p>キーワード'{$serch_key}'で<ruby><rb>検索</rb><rp> (</rp><rt>けんさく</rt><rp>) </rp></ruby>しています。</p>
	{/if}
    {if $result}
		<br>
		<p>{$count}<ruby><rb>件</rb><rp> (</rp><rt>けん</rt><rp>) </rp><rb>見</rb><rp> (</rp><rt>み</rt><rp>) </rp></ruby>つかりました。</p>
		{* <p></p> *}
		<label id="comparison"><input type="checkbox" id="comparisonButton"><span><ruby><rb>比較</rb><rp> (</rp><rt>ひかく</rt><rp>) </rp></ruby></span></button></label>
		<div style="display: flex; flex-wrap: wrap; justify-content: safe top; align-items: top;">
			<!-- foreachを使って結果をループさせる -->
			{foreach $result as $loop}
			<div style="margin: 30px; border: #6cb4e4 outset 6px; border-radius:20px; font-size: 150%; margin-bottom: 50px; padding: 20px; width: 500px;">
				<div class="item"></div>
					<input class="choice" style="cursor: pointer; transform: scale(3); margin: 0 15px 0 15px;" type="checkbox" class="check-box" name="choice[]" value="{$loop["PC_id"]}"> <ruby><rb>選択</rb><rp> (</rp><rt>せんたく</rt><rp>) </rp></ruby></input>
					<img src="{$loop["image_path"]}" style="margin: auto; display: block; padding: 15px; width: 300px;">
					<div class="hearts">
						<div type="checkbox" class="heart" checked id="{$loop["PC_id"]}">
							<svg id="heart{$loop["PC_id"]}" class="off" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" opacity: 1;" xml:space="preserve">
								<g>
									<path class="st0" d="M380.63,32.196C302.639,33.698,264.47,88.893,256,139.075c-8.47-50.182-46.638-105.378-124.63-106.879
										C59.462,30.814,0,86.128,0,187.076c0,129.588,146.582,189.45,246.817,286.25c3.489,3.371,2.668,3.284,2.668,3.284
										c1.647,2.031,4.014,3.208,6.504,3.208v0.011c0,0,0.006,0,0.011,0c0,0,0.006,0,0.011,0v-0.011c2.489,0,4.856-1.177,6.503-3.208
										c0,0-0.821,0.086,2.669-3.284C365.418,376.526,512,316.664,512,187.076C512,86.128,452.538,30.814,380.63,32.196z">
									</path>
								</g>
							</svg>
						</div>
					</div>
					{* <p></p> *}
					<i><ruby><rb>製品名</rb><rp> (</rp><rt>せいひんめい</rt><rp>) </rp></ruby>　：</i>
					<i>{$loop["name"]}</i>
					<br>
					<i><ruby><rb>製造会社</rb><rp> (</rp><rt>せいぞうがいしゃ</rt><rp>) </rp></ruby>：</i>
					<i>{$loop["maker"]}</i>
					<br>
					<i><ruby><rb>価</rb><rp> (</rp><rt>か</rt><rp>) </rp><rb>格</rb><rp> (</rp><rt>かく</rt><rp>) </rp></ruby>　　：</i>
					<i>{number_format($loop["price"])}<ruby><rb>円</rb><rp> (</rp><rt>えん</rt><rp>) </rp></ruby></i>
					<br>
					<i><ruby><rb>販売台数</rb><rp> (</rp><rt>はんばいだいすう</rt><rp>) </rp></ruby>：</i>
					<i>{number_format($loop["sales"])}<ruby><rb>台</rb><rp> (</rp><rt>だい</rt><rp>) </rp></ruby></i>
					<br>
					<i><ruby><rb>売上金額</rb><rp> (</rp><rt>うりあげきんがく</rt><rp>) </rp></ruby>：</i>
					<i>{number_format($loop["earnings"])}<ruby><rb>円</rb><rp> (</rp><rt>えん</rt><rp>) </rp></ruby></i>
					<br>
					<i><ruby><rb>稼</rb><rp> (</rp><rt>か</rt><rp>) </rp><rb>働</rb><rp> (</rp><rt>どう</rt><rp>) </rp><rb>時</rb><rp> (</rp><rt>じ</rt><rp>) </rp><rb>間</rb><rp> (</rp><rt>かん</rt><rp>) </rp></ruby>：</i>
					<i>{number_format($loop["battery"], 1)}h</i>
				</div>
			</div>
			<br>
			{/foreach}
		</div>
	</form>
    {else}
    	<br>
    	<br>
		<p><ruby><rb>検索結</rb><rp> (</rp><rt>けんさくけっ</rt><rp>) </rp><rb>果</rb><rp> (</rp><rt>か</rt><rp>) </rp></ruby>が<ruby><rb>見</rb><rp> (</rp><rt>み</rt><rp>) </rp></ruby>つかりませんでした。</p>
    {/if}
	<br>
  <button type="button" onclick="history.back()">戻る</button>
</body>
<script src="js/main.js"></script>
</html>