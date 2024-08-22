<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['horas'])) {
    $horas = $_GET['horas'];
    $total_horas = array_sum($horas);

    // Redirigir a la vista con los datos
    header("Location: ../../Vista/EJ2/resultado.php?total_horas=$total_horas");
    exit();
} else {
    // En caso de no recibir datos
    header('Location: ../../Vista/EJ2/form.php');
    exit();
}
?>
