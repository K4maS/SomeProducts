<?php
require_once 'config\database.php';
$links = mysqli_query($mysql, "SELECT * FROM `links`");
$links = mysqli_fetch_all($links);

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
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
    </head >
    <body>
            <header><!--HTML5 элемент header (остановился здесь)-->
           

            </header>
            <nav>  
                <ul> 
                    <li><a id='choose' href='index.php'  >главная</a></li>
                    <li><a href="calculator.html" >калькулятор</a></li>
                    <li><a href='randomiser.html'>рандомайзер</a></li>
                    <li><a href='linkmaker.php'>укоротитель ссылок</a> </li>
                   
                </ul>
                          
                         
                        
                        
                 
                
            </nav>
    
            <article id="main_page"><!--Main page-->
                <section>
                    <h3 class="top">Для чего создан этот сайт?</h3>
        
                    <p>Этот сайт создается как площадка для отработки моих умений. Он не имеет 
                        никаких четких задач<!--<br/>--> кроме как научить создателя пользоваться разными 
                        инструментами создания сайтов, приложений,<!--<br/>--> управления версиями и так далее. 
                        Все делается и доробатывается исключительно на бум, и вид сайта  будет звисить
                         от настроения автора.</p> 
                    <p>Сейчас реализовано: </p>
                        <ul> 
                            <li>Калькулятор</li>
                            <li>Рандомайзер</li>
                            <li>Укоротитель ссылок</li>
                        </ul>
                    
                        Остальные функции будут добавляться по мере готовности.
                        Планы гранди озные и будут сто раз переосмысливаться, результат покажет время.</p> 
                        <p><a target="_blank" href='..\resume\resume.html'>мое резюме</a></p>
                    <p >Спасибо за внимание!</p><!--align="center"-->
                </section>
            </article>
            <aside>
                <!--Второстепенный сопутствующий контент-->
            </aside>
            <footer>
                <!--Подвал <h3>All rights reserved 2022</h3>-->
               
            </footer>
        <script src="script/script.js"></script>


    </body>
</html>  