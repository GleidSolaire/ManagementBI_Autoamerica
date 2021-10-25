<?php
session_start();
include ('connect.php');


if(empty ($_POST['usuario']) || empty($_POST['senha'])) {
    header('location: index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
$senha = mysqli_real_escape_string($conn,$_POST['senha']);

 $query ="SELECT id, usuario FROM `user` WHERE `usuario` = '{$usuario}' and `senha` = '{$senha}' ";

$result = mysqli_query($conn,$query );
$row = mysqli_num_rows($result);

if ($row ==1) {
    $_SESSION ['usuario']  = $usuario;
    header('location: painel.php');
    exit();

} else {
$_SESSION['nao_autenticado'] = true;
 header('location: index.php');
 exit();
}

?>