<html> 
<body>
<link rel="stylesheet"  href="../css/style.css">
<h1>ゲームしたいひと向けPC</h1>
<form action="weight_r.php" method="GET">
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
            
        </tr>
        {foreach $result as $loop }
        <tr>
            <td>{$loop["PC_id"]}</td></td>
            <td>{$loop["name"]}</td>
            <td>{$loop["weight"]}<i>kg</i></td></td>
            <td>{$loop["battery"]}</td>
            <td>{$loop["memory"]}</td>
            <td>{$loop["storage"]}</td>
            <td>{$loop["price"]}<i>円 </i></td></td>
        </tr>
        {/foreach}
    </table>
{else}
    <p>"sippai"</p>
{/if}
    
</form>

</body>
</html>