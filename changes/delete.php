<?php
 require_once '../config/database.php';
 $link_id = $_GET['id'];
 print_r($link_id);
 mysqli_query($mysql,"DELETE FROM links WHERE `links`.`id` = '$link_id'" );
 unlink('../links/'.$link_id.'/index.html');
 rmdir('../links/'.$link_id);
 header('Location: ../');
 header('Location: ../links_list.php');
?>