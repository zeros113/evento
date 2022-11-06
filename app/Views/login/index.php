<html>
    <head>Login</head>
    <link rel="stylesheet" href="/css/estilo.css" type="text/css" media="screen">
    
</html>

<body>

<form method="post" action="/home/validar" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Ingresar</button>
</form>

<form method="post" action="http://localhost:8080/" name="signin-form">
<button type="submit" name="" value="">Regresar</button>
</form>
</html>