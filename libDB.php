<?php
class libDB{
    private PDO $pdo;
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=2023g01;charset=utf8","2023g01","2023g01", 
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
    }

    public function getPDO(){
        return $this->pdo;
    }
}
?>