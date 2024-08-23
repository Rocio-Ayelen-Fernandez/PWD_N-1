<?php
include_once "/laragon/www/pwd/tp2/Util/funciones.php";
include_once "/laragon/www/pwd/tp2/Control/Cinema.php";
$objCine = new Cinema();
$datos = dataSubmitted();
$info = $objCine->arrayAHtml($datos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejer 4 - vol 2</title>
	<link rel="stylesheet" href="/tp2/Vista/bootstrap-5.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp2/Vista/css/ejer4vol2.css">
</head>

<body>

	<div class="container">
		<header>
			<label class="titulo">La película introducida es
				<a class="btn btn-link " href=" /tp2/Vista/ejer4.php" role="button" id="boton-atras">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
						<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
					</svg>
				</a>
			</label>

		</header>
		<div class="cuerpo-Info">
			<?php foreach ($info as $key => $value) {
				echo $value;
			}; ?>
		</div>
	</div>



</body>

</html>