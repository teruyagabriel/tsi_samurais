<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kanino - Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div class="content">
        <div class="logo">
        </div>
            <div id="acomodar">
                <form action="actions/login.php" method="POST" class="form-login" id="form-login">
                    <input type="text" name="username" id="nome" class="valor" placeholder="Nome">
                    <input type="password" name="password" id="senha" class="valor" placeholder="Senha">
                    <button type="submit" id="enviar">Entrar</button>
                </form>
            </div>
        </div>
</head>
<body>
<div class="content">
    <div class="logo">
        <img src="logo.png">
    </div>
    <form action="actions/login.php" method="POST" class="form-login" id="form-login">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Entrar</button>
    </form>
</div>
</body>
</html>
