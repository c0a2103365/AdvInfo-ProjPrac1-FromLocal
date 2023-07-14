<link rel="stylesheet" media="all" href="../css/style.css">

<?php
    echo "<h2>用途ページ</h2><br/>";
    echo "<a href= ","illust_s.php"," >イラスト目的で使いたい人</a></br>";
    echo "<a href= ","mobile_s.php"," >よく持ち運びする人</a>";
    echo "<br><a href= ","work_s.php"," >仕事で作業する人</a></br>";
    require_once("../pnwsmarty.php");
    $pnw = new pnwsmarty();
    $smarty = $pnw->getTpl();

    $smarty->display("../templates/select.tpl");

?>