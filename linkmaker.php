<?php
require_once 'config\database.php';

$lastlink = mysqli_query($mysql, "SELECT * FROM `links` WHERE `id` = (SELECT max(id) FROM `links`) ");
$lastlink = mysqli_fetch_row($lastlink);

$link_id = $_GET['id'];


$added_link = mysqli_query($mysql, "SELECT * FROM `links` WHERE `id` = (SELECT max(id) FROM `links`)");
$added_link = mysqli_fetch_row($added_link);

$url = ((!empty($_SERVER['HTTPS']))? 'https': 'http'). '://' . $_SERVER['HTTP_HOST'];

?>
<!DOCTYPE html>
    <head>
        
        <title>Всякая всячина</title>
        <meta charset="utf-8"> <!--Да, он по умолчанию, но все равно указал-->
        <link  rel="shortcut icon" href="https://www.xn--h1aaecjlfhn1d.xn--p1ai/system/ckeditor_assets/pictures/180269/content_45520334_xxl.png">
        <!--стиль-->
        <link rel="stylesheet" type="text/css" href="style/style2.css"/>
    </head >
    <body>
            <header><!--HTML5 элемент header (остановился здесь)-->
           

            </header>
            <nav>
             <a href='index.php' id="main_page_btn">на главнаую</a> 
             <a href='links_list.php' id="main_page_btn">Список укороченных ссылок</a> 
                        
                        
                
            </nav>
            <article align="center"><!-- Short Link maker  -->
                    <form action="links/link.php" method="post">
                    <p>
                        <h3>Укоротитель ссылок</h3>
                    </p>
                    <p>
                        <label for="long_link_value" > Ваша ссылка: </label>
                    <br/>        
                    <input class="input" id='long_link_value' name='main_link'  type="url" value="<?= $added_link[1] ?>" placeholder="https://www.website.com/long-link/so-long124352465">
                    </p>
                    <p>
                        <label for="long_link_value" > Укороченная ссылка: </label>
                    </p>
                    <p>
                        <a target='_blank' href='<?= $url.$added_link[2]; ?>'><?= $url.$added_link[2]; ?></a> 
                    </p>
                    <p>
                        <button type="submit" class="btn" id="link_btn">Укороить ссылку</button>
                    </p>
                </form>
            </article>
            <aside>
                <!--Второстепенный сопутствующий контент-->
            </aside>
            <footer>
                <!--<h3>All rights reserved 2022</h3>Подвал-->
                
            </footer>

    </body>
</html>  