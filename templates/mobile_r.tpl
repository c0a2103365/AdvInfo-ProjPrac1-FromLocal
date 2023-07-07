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
            <th>weight</th>
            <th>battery</th>
            <th>memory</th>
            <th>price</th>
            <th>cpu</th>
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["storage"])}<i>GB</i></td>
            <td>{$loop["weight"]}</td>
            <td>{$loop["battery"]}</td>
            <td>{$loop["memory"]}</td>
            <td>{$loop["price"]}</td>
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