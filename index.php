<?php
require_once 'config\database.php';
$links = mysqli_query($mysql, "SELECT * FROM `links`");
$links = mysqli_fetch_all($links);
print_r($links);
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
                     <?php foreach($links as $link) {?>
                    <tr>
                        <th>Основная ссылка</th>
                        <th>Укороченная ссылка</th>
                    </tr>
                
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
                        <input class="input" id='long_link_value' type="link" placeholder="https://www.website.com/long-link/so-long124352465">
                    </p>
                    <p>
                        <label for="short_link_value" > Укороченная ссылка: </label>
                    <br/>        
                        <input class="input" id='short_link_value' type="link" placeholder="https://www.short.com/link">
                    </p>
                    <p>
                        <button type="submit" class="btn" id="link_btn" onclick="alert('Этот раздел еще не работает')">Укороить ссылку</button>
                    </p>
            
        <script src="script.js"></script>
    </script>


    </body>
</html>  