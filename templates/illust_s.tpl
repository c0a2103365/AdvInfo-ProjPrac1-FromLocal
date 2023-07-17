<html>
<link rel="icon" href="../images/favicon.ico">  
<body>

<h1>画質を求める人</h1>
<form action="../select/_s.php" method="get">
<link rel="stylesheet" href="css/style.css"></link>
<link rel="stylesheet" media="all" href="../css/style2.css">

{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>dpi</th>
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
            <td>{$loop["dpi_L"]}<i>x</i>{$loop["dpi_R"]}</td>
            <td>{number_format($loop["price"])}<i>円</i></td>
            <td>{number_format($loop["battery"],1)}<i>h</i></td>
            <td>{$loop["memory"]}<i>GB</i></td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td> 
            <td>{number_format($loop["storage"])}<i>GB</i></td>
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