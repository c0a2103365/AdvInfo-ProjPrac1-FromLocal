<?php
    echo "<h2>ランキングページ</h2><br/>";
    echo "<a href= ","weight_r.php"," >重さランキング</a>";
    echo "<br><a href= ","price_r.php"," >価格ランキング</a></br>";
    echo "<a href= ","mobile_r.php"," >データ保存量ランキング</a>";
    echo "<br><a href= ","battery_r.php"," >稼働時間ランキング</a></br>";
    require_once("../pnwsmarty.php");
    $pnw = new pnwsmarty();
    $smarty = $pnw->getTpl();

    $smarty->display("../templates/ranking.tpl");

?>