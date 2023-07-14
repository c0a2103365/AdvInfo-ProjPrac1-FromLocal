<html> 
<body>
<h1>データ保存量ランキング</h1>
<form action="../ranking/mbile_r.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>storage</th>
            <th>battery</th>
            <th>price</th>
            <th>memory</th>
            <th>weight</th>
            <th>cpu</th>
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["storage"])}<i>GB</i></td>
            <td>{number_format($loop["battery"],1)}<i>h</i></td>
            <td>{number_format($loop["price"])}<i>円</i></td>
            <td>{$loop["memory"]}<i>GB</i></td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td>
            <td>{$loop["cpu"]}</td>
            

        </tr>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>