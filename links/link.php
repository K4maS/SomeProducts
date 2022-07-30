<?php
require_once '../config/database.php';
$main_link=$_POST['main_link'];
$max_id = mysqli_query($mysql, "SELECT max(id) FROM `links`");
$max_id = mysqli_fetch_row($max_id);
$url = ((!empty($_SERVER['HTTPS']))? 'https': 'http'). '://' . $_SERVER['HTTP_HOST'];
$path = $_SERVER['REQUEST_URI'];
$path = explode('/link.php', $path);
$path = $path[0];
$second_link = $max_id[0]+1;
$path =$url.$path.'/'.$second_link;
mysqli_query($mysql, "INSERT INTO `links` (`id`, `main link`, `second link`) VALUES (NULL, '$main_link', '$path')");
mkdir("$second_link");
chdir($second_link);
file_put_contents("index.html" , "<?php header('Location: $main_link' );?>", FILE_APPEND);
header('Location: ../');
//header('Location: ../linkmaker.php?id='.$second_link );
header('Location: ../linkmaker.php?added_link='.$main_link.'&shprted_link='.$path  );
?>