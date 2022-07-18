<?php
require_once '../config/database.php';
$main_link=$_POST['main_link'];
$max_id = mysqli_query($mysql, "SELECT max(id) FROM `links`");
$max_id = mysqli_fetch_row($max_id);
$path = $_SERVER['REQUEST_URI'];
$path = explode('/link.php', $path);
$path = $path[0];
$second_link = $max_id[0]+1;
$path =$path.'/'.$second_link;
mysqli_query($mysql, "INSERT INTO `links` (`id`, `main link`, `second link`) VALUES (NULL, '$main_link', '$path')");
print_r($second_link);
mkdir("$second_link");
chdir($second_link);
file_put_contents("index.php" , "<?php header('Location: $main_link' );?>", FILE_APPEND);
header('Location: ../');
header('Location: ../linkmaker.php?id='.$second_link );


?>