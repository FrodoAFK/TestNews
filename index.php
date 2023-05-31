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
                        <h1>Новости</h1>
                        <hr>

                        <?php
                        while ($news = mysqli_fetch_array($res_data)) {
                        ?>
                            <p1><?php echo gmdate("d.m.Y", $news['idate']) ?></p1>
                            <li><a id="idNews" , href="/news.php"><?php echo $news['title'] ?></a></li>
                            <br>
                            <p2><?php echo $news['announce'] ?></p2>
                            <br>
                        <?php
                        }
                        ?>

                        <hr>
                        <p4>Страницы :</p4>

                        <li>
                            <?php for ($i = 1; $i <= $total_pages; $i++) {

                                if ($i == $page) {
                                    $id = "idPageActive";
                                } else {
                                    $id = "idPage";
                                }

                                echo "<a  id=$id href=?page=" . $i . ">" . $i . "</a>";
                            } ?>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </body>
</section>

</html>