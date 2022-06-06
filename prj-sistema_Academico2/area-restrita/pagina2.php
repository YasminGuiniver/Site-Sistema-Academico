<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset= UTF-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , inital-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/styleTres.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <title>Login - Restrita</title>
    </head>
    <body id="menu3">
    <div id="div1">
            <p>
                Sistema Acadêmico
            </p>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="../logout.php"> 
        <button class="btn btn-#2ca6d4 me-md-2" type="button">Sair</button>
        </a>
        </div>

        <div id = "div2"> 
            <?php
                 $nome = $_POST['txtNome'];
                $cpf = $_POST ['txtCpf'] ;
                $rg = $_POST['txtRg'];
                $classe = $_POST['slClasse'];

                    if (($nome == "Yasmin") && ($cpf == "123.456.789-12") && ($rg == "12.345.678-3") && ($classe == 3) ) {
                        echo ("O (a) aluno (a) " .$nome. " foi cadastrada com sucesso! <br>") ;  
                        echo ("Seja bem-vindo (a) a Etec de Guaianases");
                    }else {
                        echo ("Não foi possivél realizar o cadastro, tente novamente mais tarde.");
                    }
            ?>
        </div>
        <br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="index-restrita.php"> 
        <button class="btn btn-#2ca6d4 me-md-2" type="button">Voltar</button>
        </a>
        </div>

        </div>
</body>