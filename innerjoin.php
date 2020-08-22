<?php
    
     $pdo = new PDO('mysql:host=localhost;dbname=phpbasico','root','');
    /*
     sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2");

     $sql->execute();

     $info = $sql->fetchAll();

     foreach ($info as $key => $value) {
         echo 'Titulo: ' .$value['titulo'];
         echo '<br />';
         echo 'Noticia: ' .$value['conteudo'];
         echo '<hr>';
    
     }
    */

    $sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($info);
    echo '<pre>';
     

     ?>  