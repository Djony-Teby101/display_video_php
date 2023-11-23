
<?php
    require_once('Actions/view.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Galerie video</title>
</head>
<body>
    <h3 class="heading" >video gallerie</h3>
    <div class="container">
        <div class="main-video">
            <div class="video">
                <video src="upload/<?=$fistuser['video'] ?>"controls autoplay ></video>
                <h3 class="title"><?=$fistuser['id']?>.<?=$fistuser['title']?></h3>
            </div>
        </div>

        <div class="video-list">
            <a href="add.php" class="btn">Ajouter video</a>
        <?php
            foreach ($recupVideo as $video) {
                $vid=$video['video'];
                $id=$video['id'];
                $title=$video['title'];
                ?>
                

                

                <div class="vid">
                    <video src="upload/<?=$vid ?>" controls muted  ></video>
                    <h3 class="title"><?=$id ?>.<?=$title ?> </h3>
                </div>

        

            <?php
            }
            ?>
      </div>
    </div>

    <script src="app.js"></script>
</body>
</html>