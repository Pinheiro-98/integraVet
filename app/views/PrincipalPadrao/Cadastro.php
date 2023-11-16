<?php
    if (isset($_POST['submit']))
    {

        if ( !empty($_POST['CRMV'])) 
        {
            include_once('C:\xampp\htdocs\integraVet\app\config.php');

            $crmv = $_POST['CRMV'];
            $nome_vet = $_POST['nome_vet'];
            $email_vet = $_POST['email_vet'];
            $senha_vet = $_POST['senha_vet'];
    
            $result = mysqli_query($mysql,
                "INSERT INTO cadastroveterinario
                (
                  crmv,
                  nome_vet,
                  email_vet,
                  senha_vet  
                ) VALUES (
                  '$crmv',
                  '$nome_vet',
                  '$email_vet',
                  '$senha_vet'
                )"
            );

            if ($result) 
            {
                header('Location: Login.php');
            } 
        }

       
    }
?>

<!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>IntegraVet</title>
    <link href="../cssPadrao/cadastro.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer="defer" src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js"></script>
    <script defer="defer" src="../jsPadrao/cadastro.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="terco-da-tela">
        <img src="../imagens/pets_cadastro.png" class="img-fluid" alt="campanha">
    </div>
    <div class="bg-light">
        <div class="container menu">
            <div class="row">
                <div class="col-12 mn">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="../tutores/Default.html"><img src="../imagens/Logo_IntegraVET.png" alt="Logo escrito IntegraVet"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="../tutores/Default.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../tutores/Contatos.html">Contatos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../tutores/SaibaMais.html">Saiba Mais</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
    
                </div>
            </div>
        </div>
    </div>

    <div class="container cadastro mt-4">
        <div class="row selecao mt-4">

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-light" disabled></button>
            <button type="button" class="btn btn-primary btn-sm" disabled>Cadastro Veterianário</button>
            <button type="button" class="btn btn-secondary btn-sm"><a href="CadastroInstituicao.php" style="text-decoration: none; color: black;">
            Cadastro Instituição</a></button>
        </div><br>

            <div id="formVeterinario" class="form-container">
                <form action="Cadastro.php" method="POST">
                    <!-- Campos do formulário para cadastrar veterinário -->
                    <div class="input-field-group">
                        <label for="CRMV">CRMV</label>
                        <input type="text" id="CRMV" name="CRMV" autocomplete="off" class="form-control" required>
                    </div>
                    
                    <div class="input-field-group">
                        <label for="nome_vet">Nome</label>
                        <input type="text" id="nome_vet" name="nome_vet" autocomplete="off" class="form-control" required>
                    </div>

                    <div class="input-field-group">
                        <label for="email_vet">Email</label>
                        <input type="email" id="email_vet" name="email_vet" autocomplete="off" class="form-control" required>
                    </div>

                    <div class="input-field-group">
                        <label for="senha_vet">Senha</label>
                        <input type="password" id="senha_vet" name="senha_vet" autocomplete="off" class="form-control" required>
                    </div> 

                    <div class="botao col-12 text-center mt-4">
                        <input type="submit" id="submit" name="submit" value="Cadastrar" class="btn btn-primary">
                    </div>
                </form>
            </div>         
        </div>       
    </div>
</body>
</html>
