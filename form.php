<?php
    if(isset($_POST['submit']))
    {   /*
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Sobrenome: ' . $_POST['sobrenome']);
        print_r('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print_r('<br>');
        print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Telefone ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['sexo']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
        print_r('<br>');
        print_r('Número: ' . $_POST['numero']);
        print_r('<br>');
        print_r('Número: ' . $_POST['bairro']);
        print_r('<br>');
        print_r('Número: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Número: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Número: ' . $_POST['senha']);
        */
        include_once('config.php');

        $nome =         $_POST['nome'];
        $sobrenome =    $_POST['sobrenome'];
        $email =        $_POST['email'];
        $data_nasc =    $_POST['data_nascimento'];
        $telefone =     $_POST['telefone'];
        $sexo =         $_POST['sexo'];
        $endereco =     $_POST['endereco'];
        $numero =       $_POST['numero'];
        $bairro =       $_POST['bairro'];
        $cidade =       $_POST['cidade'];
        $estado =       $_POST['estado'];
        $senha =        $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, email, data_nasc, telefone, sexo, endereco, numero, bairro, cidade, estado, senha)
        VALUES('$nome', '$sobrenome', '$email', '$data_nasc', '$telefone', '$sexo', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$senha')");

        //header('Location: acess.html');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon -->
    <link rel="shortcut icon" href="./images/icon-head.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <!-- StyleSheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/form.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ac611b35dd.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Cadastre-se</title>
</head>
<body>
    <div class="container-fluid">
        <!-- <form action="form.php" method="POST"> -->
        <h1 class="title">Cadastre-se</h1>

        <form action = "form.php" method = "POST">
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
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
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

                <div class="box-input">
                    <label for="confirma-senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirma-senha">
                </div>
            </div>

            <button type="submit" name="submit" class="w-100 btn btn-login">Cadastrar</button>
        </form>

        <p>Já possui conta? <a class="link" href="acess.html">Entrar</a></p>
    </div>
</body>
</html>