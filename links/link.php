<?php
require_once '../config/database.php';
$main_link=$_POST['main_link'];
$max_id = mysqli_query($mysql, "SELECT max(id) FROM `links`");
$max_id = mysqli_fetch_row($max_id);
print_r($max_id);
$second_link = $max_id[0]+1;
print_r($second_link);
mysqli_query($mysql, "INSERT INTO `links` (`id`, `main link`, `second link`) VALUES (NULL, '$main_link', '$second_link')");
mkdir("$second_link");
chdir($second_link);
file_put_contents("index.php" , "<?php header('Location: $main_link' );?> ", FILE_APPEND);
header('Location: ../');
header('Location: ../?id='.$second_link );
?>