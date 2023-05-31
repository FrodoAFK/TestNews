<?php
include "public_html/databaseconnect.php";
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale, shrinc-to-fit=no">
    <meta http-equiv="X-Ru-Compatible" content="ie-edge">
    <title>Новости</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<section>
    <body>
        <div class="container">
            <div class="row">
                <div class="menu">
                    <ul>
                        <?php $news = mysqli_fetch_array($res_data) ?>
                        <li><?php echo $news['title'] ?></li>
                        <hr>
                        <p3><?php echo $news['content'] ?></p3>
                        <hr>
                        <li><a id="idNews" , href="/index.php">Все новости>></a></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </body>
</section>

</html>