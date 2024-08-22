<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Horas</title>
</head>
<body>
    <?php if (isset($_GET['total_horas'])) {
        $total_horas = htmlspecialchars($_GET['total_horas']);
        echo "<p>La cantidad total de horas de cursada por semana es: $total_horas horas.</p>";
    } else {
        echo '<p>No se ingresaron datos.</p>';
    } ?>
    <a href="form.php">Volver</a>
</body>
</html>
