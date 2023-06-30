<html> 
<body>
<h1>イラスト楽しみたい人向け</h1>
<form action="../select/_s.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>dpi</th>
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{$loop["dpi_L"]}<i>x</i>{$loop["dpi_L"]}</td>
        </tr>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>