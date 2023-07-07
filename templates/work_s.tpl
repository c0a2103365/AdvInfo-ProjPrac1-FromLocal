{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>inch</th>
            <th>office_app</th>
            <th>battery</th>
            <th>price</th>
            <th>memory</th>
            <th>weight</th>
            <th>storage</th>
            <th>cpu</th>
        </tr>
        {foreach $result as $loop}
        {if $loop["office_app"] != "なし"}
            <tr>
                <td>{$loop["PC_id"]}</td>
                <td>{$loop["name"]}</td>
                <td>{$loop["inch"]}</td>
                <td>{$loop["office_app"]}</td>
                <td>{number_format($loop["battery"],1)}<i>h</i></td>
                <td>{number_format($loop["price"])}<i>円</i></td>
                <td>{$loop["memory"]}</td>
                <td>{number_format($loop["weight"], 2)}<i>kg</i></td> 
                <td>{number_format($loop["storage"])}<i>GB</i></td>
                <td>{$loop["cpu"]}</td>
            </tr>
        {/if}
        {/foreach}
    </table>
{else}
    "sippai"
{/if}



</form>

</body>
</html>