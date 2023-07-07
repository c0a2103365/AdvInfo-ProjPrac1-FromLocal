<html> 
<body>
<h1>稼働時間ランキング</h1>
<form action="../ranking/battery_r.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>battery</th>
            <th>weight</th>
            <th>memory</th>
            <th>storage</th>
            <th>price</th>
            <th>cpu</th>

        </tr>
        {foreach $result as $loop}
        <tr>
            
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["battery"],1)}<i>h</i></td>
            <td>{$loop["weight"]}</td>
            <td>{$loop["memory"]}</td>
            <td>{$loop["storage"]}</td>
            <td>{$loop["price"]}</td>
            <td><i>{$loop["cpu"]}</i></td>

        </tr>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>