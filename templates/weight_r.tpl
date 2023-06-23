<html> 
<body>
<h1>重さランキング</h1>
<form action="weight_r.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>weight</th>
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{$loop["weight"]}</td>
        </tr>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>