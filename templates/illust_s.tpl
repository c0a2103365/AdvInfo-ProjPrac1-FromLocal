<html> 
<body>
<h1>画質を求める人</h1>
<form action="../select/_s.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>dpi</th>
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
            <td>{$loop["dpi_L"]}<i>x</i>{$loop["dpi_L"]}</td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td>
            <td>{$loop["battery"]}</td>
            <td>{$loop["memory"]}</td>
            <td>{$loop["storage"]}</td>
            <td>{$loop["price"]}<i>円 </i></td></td>
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