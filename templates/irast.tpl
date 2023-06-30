<html> 
<body>
<link rel="stylesheet"  href="../css/style.css">
<h1>イラストページ</h1>
<form action="weight_r.php" method="GET">
{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>　
            <th>name</th>    
            <th>weight</th>//重さ
            <th>battery</th> //稼働時間 
            <th>memory</th> //メモリ
            <th>storage</th> //ストレージ 
            
        </tr>
        {foreach $result as $loop }
        <tr>
            <td>{$loop["PC_id"]}</td>
            <td>{$loop["name"]}</td>
            <td>{$loop["weight"]}</td>
            <td>{$loop["battery"]}</td>
            <td>{$loop["memory"]}</td>
            <td>{$loop["storage"]}</td>
        </tr>
        {/foreach}
    </table>
{else}
    <p>"sippai"</p>
{/if}
    
</form>

</body>
</html>