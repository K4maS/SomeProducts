<?php
require_once 'config\database.php';
$links = mysqli_query($mysql, "SELECT * FROM `links`");
$links = mysqli_fetch_all($links);


$url = ((!empty($_SERVER['HTTPS']))? 'https': 'http'). '://' . $_SERVER['HTTP_HOST'];

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
            <nav>  
                        <a href='#' id="main_page_btn">главная</a> 
                        <a href="#" id="calc_page_btn">калькулятор</a>  
                        <a href='#' id="rand_page_btn">рандомайзер</a> 
                        <a href='linkmaker.php'id='link_page_btn'">укоротитель ссылок</a> 
                        <a target="_blank" href='resume\resume.html'>мое резюме</a> 
                 
                
            </nav>
                <table>
                   
                    <tr>
                        <th>id</th>
                        <th>Основная ссылка</th>
                        <th>Укороченная ссылка</th>
                        <th>Удаление</th>
                    </tr>
                  <?php foreach($links as $link) {?>
                    <tr>
                        <td><?=  $link[0] ?></td>
                        <td><?=  $link[1] ?></td>
                        <td><?=  $link[2] ?></td>
                        <td><a href='changes\delete.php?id=<?=$link[0]?>'>Удалить</td>
                    </tr>
                    <?php } ?>
                    
                </table>
            
    </script>


    </body>
</html>  