<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$zp = $_POST['zp'];
$data_to = $_POST['data_to'];
$data_in = $_POST['data_in'];
$mrp = $_POST['mrp'];
$date_year = $_POST['date_year'];
$date_month = $_POST['date_month'];
$status = $_POST['status'];
$inval = $_POST['inval'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `PRO` (`id`, `zp`, `data_to`, `data_in`, `mrp`, `date_year`, `date_month`, `status`, `inval`) VALUES (NULL, '$zp', '$data_to', '$data_in', '$mrp', '$date_year', '$date_month', '$status', '$inval')");

/*
 * Переадресация на главную страницу
 */

header('Location: /index.php');
