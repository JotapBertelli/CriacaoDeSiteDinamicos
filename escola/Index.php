<?php

$hostname = "localhost";
$username = "fulano";
$password = "123456";
$dbname = "meu_bd";
$usertable = "aluno";
$key = $_POST['id'];

$conn=mysqli_connect($hostname,$username,$password)
    or die("Unable to connect to database!");
mysqli_select_db($conn,$dbname)
    or die("Unable to select dbname");
echo "<h1> Dados do aluno com ID = $key </h1>";


$query = "SELECT * FROM $usertable where id =$key";

$result = mysqli_query($conn,$query);

if ($result) {
    while($row = mysqli_fetch_array($result)){
        $name = $row['nome'];
        $email = $row['email'];
        $nasc = $row['nascimento'];
        echo "Nome: " . $name  .   "<br>Nascimento:"  . $nasc . "<br>Email:" . $email . "  <br>";


    }
}
else echo "Not Users founds in this table";
