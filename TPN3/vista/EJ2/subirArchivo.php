<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
    que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
    contenido en un textarea</p>
    <form method="post" action="respuesta.php" enctype="multipart/form-data">
        Ingresa el archivo: <input name="miArchivo" id="miArchivo" type="file" />
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>