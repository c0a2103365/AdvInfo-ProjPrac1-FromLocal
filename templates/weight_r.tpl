<html>
<link rel="icon" href="../images/favicon.ico">  
<body>
<h1>重さランキング</h1>
<form action="../ranking/weight_r.php" method="get">
{if $result}
    <table border="1">
        <tr>
            <th>ranking</th>
            <th>name</th>
            <th>weight</th>
            <th>battery</th>
            <th>price</th>
            <th>memory</th>
            <th>storage</th>
            <th>cpu</th>
        </tr>
        {foreach $result as $loop}
        <tr>
            <td>{$i}</td>
            <td>{$loop["name"]}</td>
            <td>{number_format($loop["weight"], 2)}<i>kg</i></td> 
            <td>{number_format($loop["battery"],1)}<i>h</i></td>
            <td>{number_format($loop["price"])}<i>円</i></td>
            <td>{$loop["memory"]}</td>
            <td>{number_format($loop["storage"])}<i>GB</i></td>
            <td>{$loop["cpu"]}</td>
            

        </tr>
        <p class="count-up">{$i++}<p>
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>