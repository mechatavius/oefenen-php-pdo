<?php

include "DbConfig.php";

class Functies{

    private $pdo;

public function __construct($pdo){
    $this->pdo = $pdo;
}

public function Insert($naam, $element, $regio, $ras){
return $this->pdo->execute("INSERT INTO karakter (naam, element, regio, ras) VALUES (?,?,?,?)",[$naam, $element,$regio,$ras]);

}
}
?>