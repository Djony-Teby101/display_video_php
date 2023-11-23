<?php
if(isset($_POST)){
    if(isset($_POST['title']) AND !empty($_POST['title'])
        AND isset($_FILES['video']) AND ! empty($_FILES['video'])
    ){
       $title=strip_tags($_POST['title']);
       $filename=strip_tags($_FILES['video']['name']);
       $file_tmp_name=strip_tags($_FILES['video']["tmp_name"]);
       $filesize=strip_tags($_FILES['video']["size"]);
       $filetype=strip_tags($_FILES['video']["type"]);
       

    //    formats supportés.
       $allowed=[
        "mp4",
        "webm",
        "avi",
        "flv"
       ];

       $extension=strtolower(pathinfo($filename, PATHINFO_EXTENSION));

       if(array_key_exists($extension, $allowed) || in_array($filetype, $allowed)){
        $errormsg="format de fichier incorrect";
        header("location: index.php?error:$errormsg");
       }

       $newfilename=uniqid('video-',true).'.'.$extension;
       
       $folder='upload/'.$newfilename;

       if(! move_uploaded_file($file_tmp_name, $folder)){
        $errormsg="Erreur lors du traitement.";
       }

    //    recupere la DBase.
    require_once('Actions/config.php');
    //    inserer dans la DBase.
    $sql="INSERT INTO galerievideo(title, video) VALUE (?, ?)";
    $insertdata=$dbb->prepare($sql);
    $insertdata->execute([$title, $newfilename]);

    header("location: index.php");

    //    var_dump($newfilename);
       
    }
}

?>