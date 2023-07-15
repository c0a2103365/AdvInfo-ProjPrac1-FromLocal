<html> 
 
<body>
<h1>持ち運びにおすすめ</h1>
<form action="../select/mobile_s.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
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
            <td>{$loop["battery"]}<i>h</i></td>
            <td>{$loop["memory"]}<i>GB</i></td>
            <td>{$loop["storage"]}<i>GB</i></td>
            <td>{$loop["price"]}<i>円 </i></td></td>
            <td>{$loop["cpu"]}</td>
            
        </tr>
        {/foreach}
    </table>

    {foreach $picture_array as $picture}
        <div class="picture">{$picture}</div>
    {/foreach}
{else}
    "sippai"
{/if}



</form>

</body>
</html>