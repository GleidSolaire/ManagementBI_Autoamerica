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
                                   <p class="text-muted mx-1">Senha: ***  </p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/reportEmbed?reportId=48e8f53f-2b9b-4805-ae12-7dc15ba5e35f&autoAuth=true&ctid=88f10cf0-be89-4529-9897-8492e0122d92&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWJyYXppbC1zb3V0aC1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D&filterPaneEnabled=false&navContentPaneEnabled=false" target="_blank" class="btn btn-outline-warning rounded rounded-pill">Acessar Dashboard</a>

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
                                   <p class="text-muted mx-1">Senha: ***</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/reportEmbed?reportId=60d2d1d0-3a4b-4867-8bb5-3b0d02a221df&autoAuth=true&ctid=88f10cf0-be89-4529-9897-8492e0122d92&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWJyYXppbC1zb3V0aC1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D&filterPaneEnabled=false&navContentPaneEnabled=false" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

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
                                   <p class="text-muted mx-1">Senha: ***</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/reportEmbed?reportId=b7ee99bf-6da9-406e-8884-94b38aafa315&autoAuth=true&ctid=88f10cf0-be89-4529-9897-8492e0122d92&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWJyYXppbC1zb3V0aC1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D&filterPaneEnabled=false&navContentPaneEnabled=false" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

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
                                Gastos c/ Manutenção de Software/SMS
                           </h5>

                           <p class="card-text ">

                               <a href="#demo4" class=" text-light" data-bs-toggle="collapse">Credenciais:</a>

                               <div id="demo4" class="collapse bg-dark bg-opacity-25 rounded-2">
                                   <p class="text-muted mx-1">Email: powerbi2@autoamericaimp.onmicrosoft.com</p>
                                   <p class="text-muted mx-1">Senha: ***</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/reportEmbed?reportId=4893b508-43f7-46ba-8fda-0b027577627e&autoAuth=true&ctid=88f10cf0-be89-4529-9897-8492e0122d92&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWJyYXppbC1zb3V0aC1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D&filterPaneEnabled=false&navContentPaneEnabled=false" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

                       </div>
                   </div>

               </div>
               <div class="col-md-4 mt-4  text-white ">
                   <div class=" card bg-light bg-opacity-25">

                       <div class="card-body">
                           <div class="card-header text-center">
                               <img src="assets/financial-profit.png" class="bg-gradient rounded" style="width:50px;" class="rounded">
                           </div>
                           <h5 class="card-title">
                                Relatório de Vendas
                           </h5>

                           <p class="card-text ">

                               <a href="#demo5" class=" text-light" data-bs-toggle="collapse">Credenciais:</a>

                               <div id="demo5" class="collapse bg-dark bg-opacity-25 rounded-2">
                                   <p class="text-muted mx-1">Email: powerbi2@autoamericaimp.onmicrosoft.com</p>
                                   <p class="text-muted mx-1">Senha: ***</p>
                               </div>
                           </p>
                           <a href="https://app.powerbi.com/reportEmbed?reportId=7b97e8ca-8177-40e9-92c1-e87e7969aac2&autoAuth=true&ctid=88f10cf0-be89-4529-9897-8492e0122d92&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWJyYXppbC1zb3V0aC1iLXByaW1hcnktcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D&navContentPaneEnabled=false" target="_blank" class="btn btn-outline-warning shadow-lg rounded-pill">Acessar Dashboard</a>

                       </div>
                   </div>

               </div>

           </div>

       </div>
   </main>
</body>
<footer class="border-top text-center bg-opacity-25 bg-dark ">
<p class="mt-2 text-muted small"> 2022 © Todos os direitos reservados
        <strong class="small">Autoamerica Ltda</strong>
        <span class="text-muted small"> | Desenvolvido por: Gleidson Almeida</span> <span>  <img src="https://cdn-icons-png.flaticon.com/512/1466/1466134.png" width="1.8%" class="" alt="">  </span>
    </p>


</footer>

</html>