<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div id="contenedor">
        <div class="formulario">
            <h1>Member Login</h1>
            
            <form id="loginForm" action="login.php"method="post">
                <input type="text" id="user" name="user" size="15" placeholder="Username" required>
                <div id="mensajeUser" class="mensajeError"></div>

                <input type="password" id="password" name="password" size="15" placeholder="Password" required><br>
                <div id="mensajePass" class="mensajeError"></div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script> -->
    <script src="../assets/js/verificarLogin.js">console.log('jQuery loaded')</script>
</body>
</html>