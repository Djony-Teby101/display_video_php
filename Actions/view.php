<?php
require_once('config.php');

$sql="SELECT * FROM galerievideo";
$selectVideo=$dbb->prepare($sql);
$selectVideo->execute();

$recupVideo=$selectVideo->fetchAll();

// recuperer les informations de la 1er video.
$first=1;
$sql="SELECT * FROM galerievideo WHERE id=?";
$recupfirst=$dbb->prepare($sql);
$recupfirst->execute(array($first));

$fistuser=$recupfirst->fetch();




?>