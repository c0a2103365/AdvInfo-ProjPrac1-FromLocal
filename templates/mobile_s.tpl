<html> 
<body>
<h1>持ち運びにおすすめ</h1>
<form action="../select/mobile_s.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>mobile</th>
            <th>weight</th>
            <th>battery</th>
            <th>memory</th>
            <th>storage</th>
            <th>price</th>
            <th>cpu</th>
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td>
            <td>{$loop["battery"]}</td>
            <td>{$loop["memory"]}</td>
            <td>{$loop["storage"]}</td>
            <td>{$loop["price"]}<i>円 </i></td></td>
            <td>{$loop["storage"]}</td>
            
        </tr>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>