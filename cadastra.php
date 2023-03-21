<?php

$host = 'localhost';
$usuario = 'matson';
$senha = 'juninho2';
$banco = 'cadastros';

$conexao = new  mysqli($host, $usuario, $senha, $banco);


if ($conexao -> connect_error) {
    die("Conexão Falhou" . $conexao->connect_error);
}


$nome = $_POST['nome'];
$email =  $_POST['email'];
$contato =  $_POST['contato'];


$cpf = $_POST['cpf'];

$marca1 =  $_POST['marca1'];
$placa1 = $_POST['placa1'];
$marca2 = $_POST['marca2'];
$placa2 = $_POST['placa2'];
$marca3 =  $_POST['marca3'];
$placa3 = $_POST['placa3'];

$sql = "INSERT INTO nome_da_tabela (nome,email,contato,cpf,marca1,placa1,marca2,placa2,marca3,placa3) values ('$nome','$email','$contato','$cpf','$marca1','$placa1','$marca2','$placa2','$marca3','$placa3')";

$stmt = $conexao->prepare("INSERT INTO nome_da_tabela (nome,email,contato,cpf,marca1,placa1,marca2,placa2,marca3,placa3) values (?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssss", $nome, $email, $contato, $cpf, $marca1, $placa1, $marca2, $placa2, $marca3, $placa3);

$resultado = $stmt->execute();

if ($resultado) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}
$stmt->close();
$conexao->close();

?>
