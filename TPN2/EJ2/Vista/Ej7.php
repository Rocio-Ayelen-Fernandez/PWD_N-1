<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <form id="calculosForm" action="postForm.php" method="post" onSubmit="return Validar();">

    <input type="text" id="op1" name="op1">
    <input type="text" id="op2" name="op2">

    <select name="tipo" id="tipo">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    <button type="submit">Enviar</button>

    </form>
    <script src="assets/js/ej7.js"></script>
  
</body>
</html>