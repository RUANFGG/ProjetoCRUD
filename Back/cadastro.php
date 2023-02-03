<?php

include("conexao.php");
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="INSERT INTO cadastro(email, senha) VALUE('$email', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}else{
    echo "Erro";
}
mysqli_close($conexao);



?>