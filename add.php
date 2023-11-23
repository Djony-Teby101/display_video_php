<?php
 require_once('Actions/add.logic.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Download</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: center;
            flex-direction: column;
            min-height: 100vh;
        }
        input{
            font-size: 2rem;
        }

        .btn{
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post"  enctype="multipart/form-data">
            
            <input type="text" name="title" placeholder=" tapez le titre..." required><br><br>
            <input type="file" name="video" required ><br><br>
            <input type="submit" value="envoyez" class="btn">
        </form>
    </div>
</body>
</html>