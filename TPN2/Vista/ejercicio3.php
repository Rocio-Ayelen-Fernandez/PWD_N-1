<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/login.css?<?php echo time(); ?>">
    <title>Login</title>    
</head>
<body class="d-flex justify-content-center align-items-center mh-100 vh-100">>
    <div id="contenedor">
        <div class="formulario">
            <h1>Member Login</h1>
            
            <form id="loginForm" action="action/ejercicio3.php"method="post" class="px-2 py-3 bg-body-tertiary d-flex flex-column justify-content-center align-items-center m-4">
                <div class="input-wrapper mb-2">
                <input type="text" id="user" name="user" size="15" placeholder="Username" required>
                <img src="assets/img/person-fill.svg" alt="user icon" class="">
                </div>
                
                <div id="mensajeUser" class="mensajeError"></div>
                <div class="input-wrapper mb-2">
                <input type="password" id="password" name="password" size="15" placeholder="Password" required>
                <img src="assets/img/lock-fill.svg" alt="lock icon">
                </div>
                
                <div id="mensajePass" class="mensajeError "></div>
                <button type="submit" class="text-light bg-success border border-0 mt-3">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script> -->
    <script src="assets/js/verificarLogin.js">console.log('jQuery loaded')</script>
</body>
</html>