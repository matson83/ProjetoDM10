
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sucesso</title>
</head>
<body>
    <div class="box">
    <?php

$host = 'localhost';
$usuario = 'matson';
$senha = 'juninho2';
$banco = 'cadastros';

$conexao = new  mysqli($host, $usuario, $senha, $banco);


$sql = "SELECT * FROM nome_da_tabela";

$result = mysqli_query($conexao, $sql);

while($dados = mysqli_fetch_assoc($result)){
    echo " - Nome: " . $dados["nome"] ."<br>". "<b> - Email:</b> " . $dados["email"] ."<br>". "- Contato : " . $dados["contato"] ."<br>"."- CPF : " . $dados["cpf"]."<br>"." - Veiculo 1 :" . $dados["marca1"] ."<br>". "<b> - Placa do veiculo 1:</b> " . $dados["placa1"] ."<br>". "<b>- Veiculo 2 :</b> : " . $dados["marca2"] ."<br>"."- Placa do veiculo 2 :".$dados["placa2"] ."<br>"."<b> - Veiculo 3 : </b>" . $dados["marca3"]."<br>"."<b>- Placa do veiculo 3 :</b>".$dados["placa3"]."<br>";

echo "-----------------------------------------------------------------------------------------------------"."<br>";
}



?>

 <div class="link-lista">
     <a  href="lista.php">HOME</a>
 </div>
    

</body>
</html>
