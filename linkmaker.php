<?php
session_start();
require_once 'config\database.php';
$added_link = mysqli_query($mysql, "SELECT * FROM `links` WHERE `id` = (SELECT max(id) FROM `links`)");
$added_link = mysqli_fetch_row($added_link);
$_SESSION['last_added_link']= $added_link[1];
$_SESSION['last_shorted_link']= $added_link[2];

$link_id = $_GET['id'];



?>
<!DOCTYPE html>
    <head>
        
        <title>Всякая всячина</title>
        <meta charset="utf-8"> <!--Да, он по умолчанию, но все равно указал-->
        <link  rel="shortcut icon" href="https://www.xn--h1aaecjlfhn1d.xn--p1ai/system/ckeditor_assets/pictures/180269/content_45520334_xxl.png">
        <!--стиль-->
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
    </head >
    <body>
            <header><!--HTML5 элемент header (остановился здесь)-->
           

            </header>
            <nav>
                <a href='index.php' id="main_page_btn">главная</a> 
                <a href="calculator.html" id="calc_page_btn">калькулятор</a>  
                <a href='randomiser.html' id="rand_page_btn">рандомайзер</a> 
                <a href='linkmaker.php'id='link_page_btn'">укоротитель ссылок</a> 
                <a target="_blank" href='resume\resume.html'>мое резюме</a> 
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
                    <input class="input" id='long_link_value' name='main_link'  type="url" value="<?= $_SESSION['last_added_link'];?>" placeholder="https://www.website.com/long-link/so-long124352465">
                    </p> 
                    <p>
                        <label for="long_link_value" > Укороченная ссылка: </label>
                    </p>
                    <p>
                        <a target='_blank' href='<?= $_SESSION['last_shorted_link']; ?>'><?= $added_link[2]; ?></a> 
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