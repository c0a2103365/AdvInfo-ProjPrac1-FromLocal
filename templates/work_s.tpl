{if $result}
    <table border="1">
        <tr>
            <th>PC_id</th>
            <th>name</th>
            <th>office_app</th>
        </tr>
        {foreach $result as $loop}
        {if $loop["office_app"] != "なし"}
            <tr>
                <td>{$loop["PC_id"]}</td>
                <td>{$loop["name"]}</td>
                <td>{$loop["office_app"]}</td>
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