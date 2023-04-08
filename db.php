<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=srv50908_users',
        'srv50908_ht58769', 'vVKoq83W' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>