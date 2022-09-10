<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome'];
                $email = $user_data['email'];
                $data_nasc = $user_data['data_nasc'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $endereco = $user_data['endereco'];
                $numero = $user_data['numero'];
                $bairro = $user_data['bairro'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $senha = $user_data['senha'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <style>
:root {
    --cor1: #4ab5ca;
    --cor2: #16dac6;
    --cor3: #23c587;
    --cor4: #0cf259;
    --cor5: #15eb20;
}

* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: Helvetica;
    color: #323232;
    border: none;
}

body{
    background-color: white;
    background: linear-gradient(to left, var(--cor2) 30%, var(--cor4) 80%);
    background-size: cover;
}

a{
    text-decoration: none;
    color: #323232;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 10px;
    padding: 10px;
}

button {
    background-color: white;
    border: 1px solid var(--cor4);
    padding: 7.5px;
    max-width: 200px;
    margin: 10px 0 0 10px;
    font-weight: bold;
    font-size: 0.8em;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    transition: all .4s ease-out;
}

button:hover {
    background-color: var(--cor2);
    color: rgb(0, 0, 0);
}

.box{
    color: #323232;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: 10px;
    transform: translate(-50%, -50%);
    background: white;
    padding: 15px;
    border-radius: 15px;
    max-width: 700px;

}

fieldset{
    border: 3px solid #0cf259;
    padding: 5px;
}

legend{
    border: 1px solid #0cf259;
    padding: 6px;
    text-align: center; /*alinhar centro*/
    background-color: #0cf259;
    border-radius: 8px;
    
}

.inputBox{
    position: relative;
    padding: -10px;
}

.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid  #323232;
    outline: none;
    color: #323232;
    font-size: 11px;
    width: 100%;
    letter-spacing: 2px; /*aumenta espaçamento caracter*/
}

.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{ /*joga os input pra cima*/
    top: -20px;
    font-size: 12px;
    color: #0cf246;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px; /*aumenta a fonte*/
}

#submit{
    background-color: #0cf259; 
    width: 100%;
    border: none;
    padding: 10px;
    color: white;
    font-size: 22px;
    margin-top: 20px;
    cursor: pointer;
    border-radius: 10px;
}

#submit:hover{
    background-color: var(--cor5);
}    </style>
</head>
<body>
    <button><a href="sistema.php">Voltar</a></button>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>
                <br>
                <div class="mb-3 wrapper">
                <div class="box-input">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                
                <div class="box-input"> 
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3 wrapper">
                <div class="box-input">
                    <label for="data-nasc" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="data_nasc" name="data_nascimento">
                </div>
                
                <div class="box-input">
                    <label for="telefone" class="form-label">Telefone/Celular</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone">
                </div>
            </div>

            <div class="mb-3">
                <h2>Sexo</h2>

                <div class="wrapper-radio">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">Masculino</label>

                    <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                    <label class="form-check-label" for="feminino">Feminino</label>

                    <input class="form-check-input" type="radio" name="sexo" id="outro" value="outro">
                    <label class="form-check-label" for="outro">Outro</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>

            <div class="mb-3 wrapper">
                <div class="box-input">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </div>

                <div class="box-input">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
            </div>

            <div class="mb-3 wrapper">
                <div class="box-input">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>

                <div class="box-input">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                </div>
            </div>

            <div class="mb-3 wrapper">

                <div class="box-input">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="senha">
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>