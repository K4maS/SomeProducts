<?php
session_start();
require_once 'config\database.php';
$added_link = mysqli_query($mysql, "SELECT * FROM `links` WHERE `id` = (SELECT max(id) FROM `links`)");
$added_link = mysqli_fetch_row($added_link);
$link_id = $_GET['id'];
$added_link = $_GET['added_link'];
$shorted_link = $_GET['shprted_link'];


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
            <ul> 
                    <li><a href='index.php'  >главная</a></li>
                    <li><a href="calculator.html"  >калькулятор</a></li>
                    <li><a href='randomiser.html' >рандомайзер</a></li>
                    <li><a href='linkmaker.php' id='choose' >укоротитель ссылок</a> </li>
                
                    <li><a href='links_list.php'  >cписок укороченных ссылок</a> </li>
            </ul>
                
                        
                        
                
            </nav>
            <article align="center"><!-- Short Link maker  -->
                    <form action="links/link.php" method="post" >
                    <p>
                        <h3>Укоротитель ссылок</h3>
                    </p>
                    <p>
                        <label for="long_link_value" > Ваша ссылка: </label>
                    <br/>        
                    <input class="input" id='long_link_value' name='main_link'  type="url" value="<?= $added_link;?>" placeholder="https://www.website.com/long-link/so-long124352465" required>
                    </p> 
                    <p>
                        <button type="submit" class="btn" id="link_btn">Укороить ссылку</button>
                    </p>
                    <p>
                        <label for="long_link_value" > Укороченная ссылка: </label>
                    </p>
                    <p>
                        <a target='_blank' href='<?= $added_link; ?>'><?= $added_link; ?></a> 
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