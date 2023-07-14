
<?php
    
    require_once("../pnwsmarty.php");
    $pnw = new pnwsmarty();
    $smarty = $pnw->getTpl();

    $smarty->display("../templates/ranking.tpl");

?>