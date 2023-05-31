<?php

$mysql_host = 'localhost';
$mysql_login = 'root';
$mysql_pass = 'root';
$mysql_database = 'news';

$db = mysqli_connect($mysql_host,$mysql_login, $mysql_pass, $mysql_database);

if ($db == false)
{
    echo "Ошибка подключения";
}

$result = mysqli_query($db, "SELECT * FROM `news`");



if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
 
$size_page = 5;
$offset = ($page-1) * $size_page;

$count_sql = "SELECT COUNT(*) FROM `news`";
$result = mysqli_query($db, $count_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $size_page);


$sql = "SELECT * FROM `news` LIMIT $offset, $size_page";
$res_data = mysqli_query($db, $sql);


mysqli_close($db);

