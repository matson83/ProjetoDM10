<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="/js/script.js"></script>

    <title>Sistema De Estacionamento</title>
</head>
<body>
    <div class="box">
        <form action="cadastra.php" method="POST">
            
            <fieldset>
               <legend><strong>CADASTRO</strong></legend>

               <br>

               <div class="inputBox">

                <label class="LabelText" for="nome">Nome completo:  </label>
                <input type="text" name="nome" id="nome" class="inputs" required>

               </div>
               <br>
               
               <div class="inputBox">

                <label class="LabelText" for="nome">Email:  </label>
                <input type="text" name="email" id="email" class="inputs" required>

               </div>
               <br>
               <div class="inputBox">

                <label class="LabelText" for="nome">Celular:  </label>
                <input type="text" name="contato" id="contato" class="inputs" required>

               </div><br>

               <div class="inputBox">

                <label class="LabelText" for="cpf">CPF:  </label>
                <input type="text" name="cpf" id="cpf" class="inputs" required>

               </div>
               <br>

                <div class="title">
                        <label  for="">Veículo 1</label>

                </div>

                        <div class="inputBox">

                            <label class="LabelText" for="vec_1_marca">Marca:  </label>
                            <input type="text" name="marca1" id="marca1" class="inputs" required>

                        </div>
                        <br>
                        <div class="inputBox">

                            <label class="LabelText" for="vec_1_placa">Placa:  </label>
                            <input type="text" name="placa1" id="placa1" class="inputs" required>

                        </div><br>

                <div class="title">
                        <label for="">Veículo 2</label><br>
                        </div>

                        <div class="inputBox">

                            <label  class="LabelText" for="vec_2_marca">Marca:  </label>
                            <input type="text" name="marca2" id="marca2" class="inputs">

                        </div>
                        <br>
                        <div class="inputBox">

                            <label class="LabelText" for="vec_2_placa">Placa:  </label>
                            <input type="text" name="placa2" id="placa2" class="inputs">

                </div>
                <br>
                <div class="title">
                        <label for="">Veículo 3</label>
                        </div>

                        <div class="inputBox">

                            <label class="LabelText" for="vec_3_marca">Marca:  </label>
                            <input type="text" name="marca3" id="marca3" class="inputs">

                        </div>
                        <br>
                        <div class="inputBox">

                            <label class="LabelText" for="vec_3_placa">Placa:  </label>
                            <input  type="text" name="placa3" id="placa3" class="inputs">

                 </div>

                 <br>
             <input class="botao" type="submit" name="submit" id="submit" value="Cadastrar">
             <div class="link-lista">
                <a  href="lista.php">Lista de Cadastro</a>
             </div>

            </fieldset>


        </form>
    </div>
</body>
</html>
