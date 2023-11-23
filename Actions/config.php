<?php

try {
    $dbb=new PDO("mysql:host=localhost;dbname=vidgalerie","root","");
} catch (PDOException $e) {
    die("Erreur:".$e->getMessage());
}


?>