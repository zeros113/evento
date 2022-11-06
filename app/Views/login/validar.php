<?php
session_start();
if($_SESSION['usuario']){
// es ejecutado desde cerrar sesion del menu.php
// si  hay sesion del usuario, es decir  esta logeado lo deslogueo
session_destroy(); // Elimino la sesion
    header("Location: index.php"); // lo redirijo al index
     exit();// termino el script
}
// es ejecutado por el formulario de login.php
$usuario = strtolower(trim($_POST['usuario']));
$password = trim($_POST['password']);
if (!isset($usuario, $password)) { // verifica si estan definidas las variables
    $login = FALSE;
} else {
    if (empty($usuario) || empty($password)) { // verifica que no esten vacias
        $login = FALSE;
    } else {
        $login = TRUE;
    }
}
if ($login === TRUE) {
    $_SESSION['usuario'] = $usuario; // en la sesion guardo el nombre del usuario para ser usado en otras paginas
   
}
    header("Location: /evento/index");
     exit();

     