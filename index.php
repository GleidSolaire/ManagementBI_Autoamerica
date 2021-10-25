<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/style.css">
    <link rel="shortcut icon" href="assets/favico.ico" />

    <script src="public/scripts.js"></script>
    <title>Gerenciamento de dashboards </title>
</head>

<body>


    <div class=" container-fluid" align="center">
        <div class="row ">
            <div class="col-sm-6 col-md-2 my-4 ">
                <img src="assets/autoamerica.png" alt="logo_image">
            </div>
        </div>



        <div class="col-auto-6 col-xs-6 col-md-4">
            <div class="placeholder-glow ">
                <h4 class="text-white bg-dark placeholder w-100 rounded-3"> Management Dashboards BI</h4>
                <div class="progress mt-2 mb-5" style="height: 7px;">
                    <div class=" progress-bar-striped bg-dark progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <form action="login.php" method="POST" class="container-fluid border-top bg-dark bg-opacity-25 border-dark  ">
                <?php
                if (isset ($_SESSION['nao_autenticado'])): 
                ?>
                <div class="alert alert bg-danger bg-opacity-50 text-light mt-1" role="alert">
                    Credencal não identificada, tente novamente
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="mt-5 mb-5 shadow input-group">
                    <input type="text" class="form-control bg-white bg-opacity-50 shadow-lg" name="usuario" placeholder="Usuario">
                    <span class="input-group-text bg-light bg-opacity-50  icon-input-span"><i class="bi bi-person "></i></span>
                </div>
                <div class=" mb-5 shadow input-group ">
                    <input type="password" class="form-control bg-white bg-opacity-50 shadow-lg" name="senha" placeholder="Senha">
                    <span class="input-group-text bg-light bg-opacity-50  icon-input-span"><i class="bi bi-key "></i></span>
                </div>

                <span class="icon-input-btn ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#212529" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                    <input type="submit" class=" mb-3 btn btn-outline-dark btn-lg" value="Entrar">
                </span>
            </form>
        </div>
    </div>
</body>


<footer class="border-top text-center bg-opacity-25 bg-dark">

    <p class="col-md-4 mb-0 text-muted"> 2021 © Todos os direitos reservados
        <strong class="">Autoamerica Ltda</strong>
    </p>
    <span class="text-muted"> <small> Desenvolvido por: Gleidson Almeida </small> </span>


</footer>


</html>