<?php
     $pdo = new PDO('mysql:host=localhost;dbname=phpbasico','root','');

     $id = 2;

     $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario',sobrenome='Pedro' WHERE id=$id");

     if($sql->execute()){
         echo 'Cliente atualizado com sucesso!';
     }
?>