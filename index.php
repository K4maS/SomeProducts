<?php
require_once 'config\database.php';
$links = mysqli_query($mysql, "SELECT * FROM `links`");
$links = mysqli_fetch_all($links);

$lastlink = mysqli_query($mysql, "SELECT * FROM `links` WHERE `id` = (SELECT max(id) FROM `links`) ");
$lastlink = mysqli_fetch_row($lastlink);

$link_id = $_GET['id'];


$added_link = mysqli_query($mysql, "SELECT * FROM `links` WHERE `id` = '$link_id'");
$added_link = mysqli_fetch_row($added_link);
print_r($added_link);
?>
<!DOCTYPE html>
    <head>
        
        <title>Всякая всячина</title>
        <meta charset="utf-8"> <!--Да, он по умолчанию, но все равно указал-->
        <link  rel="shortcut icon" href="https://www.xn--h1aaecjlfhn1d.xn--p1ai/system/ckeditor_assets/pictures/180269/content_45520334_xxl.png">
        <!--
        <link rel="stylesheet" type="text/css" href="style.css"/>стиль-->
    </head >
    <body>
            <header><!--HTML5 элемент header (остановился здесь)-->
               
                <table>
                   
                    <tr>
                        <th>Основная ссылка</th>
                        <th>Укороченная ссылка</th>
                    </tr>
                  <?php foreach($links as $link) {?>
                    <tr>
                        <td><?=  $link[1] ?></td>
                        <td><?=  $link[2] ?></td>
                    </tr>
                    <?php } ?>
                    
                </table>
                
                    <form action="links/link.php" method="post">
                    <p>
                        <h3>Укоротитель ссылок</h3>
                    </p>
                    <p>
                        <label for="long_link_value" > Ваша ссылка: </label>
                    <br/>        
                        <input class="input" name='main_link' id='long_link_value' type="link" value="<?= $added_link[1] ?>" placeholder="https://www.website.com/long-link/so-long124352465">
                    <p><a target='_blank' href='<?= 'http://someproducts/links/'.$added_link[2]; ?>'><?= 'http://someproducts/links/'.$added_link[2]; ?></a> </p>
                    <p>
                        <button type="submit" class="btn" id="link_btn" >Укороить ссылку</button>
                    </p>
            
        <script src="script.js"></script>
    </script>


    </body>
</html>  