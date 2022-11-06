<html>
    <title>Menú</title>
    <link rel="stylesheet" type="text/css" href="/css/estilosmenu.css">
</html>
<body>
    <div>
      <p><img src="/img/logo.png" alt="Conalep" width="80" height="60">&nbsp;&nbsp;&nbsp;Sistema de Registro de un Anime - Isla 1&nbsp;
    </div>    

    <div class="container">
        <nav>
         <input id="toggle" type="checkbox" checked>
        <h2>Elige una opción</h2>
      <ul>
        <li><a href="/usuario/index">Usuarios</a></li>
        <li><a href="/evento/index">Registrar</a></li>
      </ul>
   </nav>
   <form method="post" action="http://localhost:8080/" name="signin-form">
<button type="submit" name="" value="">Regresar a la Pagina Principal</button>
</form>
<form method="post" action="http://localhost:8080/home/login" name="signin-form">
<button type="submit" name="" value="">Regresar al Usuario</button>
</form>     
</body>
</html>