<?php
     $pdo = new PDO('mysql:host=localhost;dbname=phpbasico','root','');

     $id = 2;

     $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=2");

     if($sql->execute()){
         echo 'Cliente deletado com sucesso!';
     }
?>