<html>
<link rel="icon" href="../images/favicon.ico"> 
<body>
<link rel="stylesheet"  href="../css/style.css">
<h1>仕事をする人向け</h1>
<form action="weight_r.php" method="GET">
{if $result}
    <table class="work_s" border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>inch</th>
            <th>office_app</th>
            <th>battery</th>
            <th>price</th>
            <th>memory</th>
            <th>weight</th>
            <th>storage</th>
            <th>cpu</th>
        </tr>
        {foreach $result as $loop}
        {if $loop["office_app"] != "なし"}
            <tr>
                <td>{$loop["PC_id"]}</td>
                <td>{$loop["name"]}</td>
                <td>{$loop["inch"]}</td>
                <td>{$loop["office_app"]}</td>
                <td>{number_format($loop["battery"],1)}<i>h</i></td>
                <td>{number_format($loop["price"])}<i>円</i></td>
                <td>{$loop["memory"]}<i>GB</i></td>
                <td>{number_format($loop["weight"], 2)}<i>kg</i></td> 
                <td>{number_format($loop["storage"])}<i>GB</i></td>
                <td>{$loop["cpu"]}</td>
            </tr>
        {/if}
        {/foreach}
    </table>
<center><p>※価格と重量はデータの数値が低いほど、レーダーチャートの数値が大きくなります。</p></center>
    {foreach $picture_array as $picture}
        <div class="picture">{$picture}</div>
    {/foreach}
{else}
    "sippai"
{/if}



</form>

</body>
</html>