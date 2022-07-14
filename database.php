<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'some_pr');

$mysql = @new mysqli(DB_HOST, DB_USER, DB_NAME, DB_PASSWORD);
if($mysql->connect_errno) exit('ощибка подключения к БД');
$mysql->set_charset('utf8');
$mysql->close();
?>