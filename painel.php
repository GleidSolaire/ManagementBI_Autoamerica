<?php

if(!isset($_SESSION)) 
   { 
       session_start(); 
   }

if(!$_SESSION['usuario']) {
  header('Location: index.php');
 
   exit();
} 

?>


<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="public/scripts.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="public/stylepanel.css">
      <link rel="shortcut icon" href="assets/favico.ico" />
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

   <title>Painel de acessos</title>
</head>

<body>
   <main>
       <div class="d-flex flex-column flex-shrink- bg-gradient " style="width: 4rem;">

           <ul class="nav navbar-nav justify-content-start flex-grow-1 pe-3">
               <li>
                   <div class="dropdown   mx-2 my-3 text-lg-center ">
                       <a href="#" class="text-warning d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="bi-person-circle w-100 text-warning"></i>
                       </a>
                       <ul class="dropdown-menu text-small bg-light bg-opacity-10 shadow" aria-labelledby="dropdownUser2">
                           <li><a class="dropdown-item bg-light bg-opacity-50" href="#">Bem Vindo, <?php echo $_SESSION['usuario']; ?> </a></li>

                           <li>
                               <hr class="dropdown-divider">
                           </li>
                           <li><a class="text-warning mx-2" href="logout.php">Sair</a></li>
                       </ul>
                   </div>

               </li>

           </ul>

       </div>

       <div class="container-fluid my-3">
           <div class="row">
               <div class="col-md-4  text-white ">
                   <div class=" card bg-light bg-opacity-25">

                       <div class="card-body">
                           <div class="card-header text-center">
                               <img src="assets/diagrama.png" class="bg-gradient rounded" style="width:50px;" class="rounded">
                           </div>
                           <h5 class="card-title">
                              DRE
                           </h5>

                           <p class="card-text ">

                               <a href="#demo1" class=" text-light" data-bs-toggle="collapse">Credenciais:</a>

                               <div id="demo1" class="collapse bg-dark bg-opacity-25 rounded-2">
                                   <p class="text-muted mx-1">Email: powerbi2@autoamericaimp.onmicrosoft.com</p>
                                   <p class="text-muted mx-1">Senha: respectiva do acesso  </p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/links/JbGFbHrOu6?ctid=88f10cf0-be89-4529-9897-8492e0122d92&pbi_source=linkShare" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

                       </div>
                   </div>

               </div>
               <div class="col-md-4  text-white ">
                   <div class=" card bg-light bg-opacity-25">

                       <div class="card-body">
                           <div class="card-header text-center">
                               <img src="assets/o-negocio.png" class="bg-gradient rounded" style="width:50px;" class="rounded">
                           </div>
                           <h5 class="card-title">
                                Horas SMS
                           </h5>

                           <p class="card-text ">

                               <a href="#demo2" class=" text-light" data-bs-toggle="collapse">Credenciais:</a>

                               <div id="demo2" class="collapse bg-dark bg-opacity-25 rounded-2">
                                   <p class="text-muted mx-1">Email: powerbi2@autoamericaimp.onmicrosoft.com</p>
                                   <p class="text-muted mx-1">Senha: windows</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/groups/me/reports/10ec52e6-ce58-436a-a43e-163a06578e75/ReportSection" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

                       </div>
                   </div>

               </div>
               <div class="col-md-4  text-white ">
                   <div class=" card bg-light bg-opacity-25">

                       <div class="card-body">
                           <div class="card-header text-center">
                               <img src="assets/apresentacao.png" class="bg-gradient rounded" style="width:50px;" class="rounded">
                           </div>
                           <h5 class="card-title">
                                Portal de Chamados TI
                           </h5>

                           <p class="card-text ">

                               <a href="#demo3" class=" text-light" data-bs-toggle="collapse">Credenciais:</a>

                               <div id="demo3" class="collapse bg-dark bg-opacity-25 rounded-2">
                                   <p class="text-muted mx-1">Email: powerbi2@autoamericaimp.onmicrosoft.com</p>
                                   <p class="text-muted mx-1">Senha: windows</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/groups/me/reports/b7ee99bf-6da9-406e-8884-94b38aafa315/ReportSection" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

                       </div>
                   </div>

               </div>
              
               <div class="col-md-4 mt-4  text-white ">
                   <div class=" card bg-light bg-opacity-25">

                       <div class="card-body">
                           <div class="card-header text-center">
                               <img src="assets/cost.png" class="bg-gradient rounded" style="width:50px;" class="rounded">
                           </div>
                           <h5 class="card-title">
                                Gastos com Manutenção de Software/SMS
                           </h5>

                           <p class="card-text ">

                               <a href="#demo3" class=" text-light" data-bs-toggle="collapse">Credenciais:</a>

                               <div id="demo3" class="collapse bg-dark bg-opacity-25 rounded-2">
                                   <p class="text-muted mx-1">Email: powerbi2@autoamericaimp.onmicrosoft.com</p>
                                   <p class="text-muted mx-1">Senha: windows</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/groups/0c18ed7e-b608-4a24-ba37-f029e81bda99/reports/4893b508-43f7-46ba-8fda-0b027577627e/ReportSection" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

                       </div>
                   </div>

               </div>


           </div>

       </div>
   </main>
</body>
<footer class="border-top text-center bg-opacity-25 bg-dark ">
<p class="mt-2 text-muted small"> 2021 © Todos os direitos reservados
        <strong class="small">Autoamerica Ltda</strong>
        <span class="text-muted small"> | Desenvolvido por: Gleidson Almeida</span> <span>  <img src="https://cdn-icons-png.flaticon.com/512/1466/1466134.png" width="1.8%" class="" alt="">  </span>
    </p>


</footer>

</html>