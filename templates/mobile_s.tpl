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
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td>
        </tr>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>