<?php

try {

    $db = new PDO("mysql:host=localhost;dbname=dogakuru;charset=utf8",'root','');
   // echo "Veri tabanı bağlantısı başarılı";
} 
catch (PDOException $e) {

    echo $e->getMessage();
}
?>