<?php
require_once("Smarty/libs/Smarty.class.php");

/**
 * Author: Hidehiro Kanemitsu.
 */
class pnwsmarty{
    private $smarty;
    /**
     * コンストラクタ
     */
    public function __construct()
    {
       $this->smarty = new Smarty();
       $this->smarty->template_dir = realpath(__DIR__)."/templates/";
       $this->smarty->compile_dir = realpath(__DIR__). "/templates_c/";

    }

    public function getTpl(){
        return $this->smarty;
    }
}

?>