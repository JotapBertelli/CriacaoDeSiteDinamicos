<?php 
    require_once '';
    $key = $_POST['CPF'];
    $pdo = new PDO("mysql:host=localhost;db:name=sistema", 'admin', );
    $query = "select * from usuario where cpf $key";
    $query_result = $pdo->query($query);
    $usuario = $query_result->fetch(PDO::FETCH_OBJ);
    echo "$usuario->nome <br>";
    echo '$usuario->endereco <br>';



?>