<html> 
<body>
<h1>価格ランキング</h1>
<form action="../ranking/price_r.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>price</th>
            <th>battery</th>
            <th>memory</th>
            <th>weight</th>
            <th>storage</th>
            <th>cpu</th>
            
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["price"])}<i>円</i></td>
            <td>{number_format($loop["battery"],1)}<i>h</i></td>
            <td>{$loop["memory"]}</td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td> 
            <td>{number_format($loop["storage"])}<i>GB</i></td>
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