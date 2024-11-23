<!DOCTYPE HTML>
<html lang= "es">
	<head>		
		<meta charset="UTF-8">

		<title>GattiDev :: Hotel Avenida : Contacto</title>	
		
		<!--favicon.ico-->
		<link rel="shortcut icon" href="imag/logo/favicon.ico">

		<!--Redes sociales-->		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!--Importo style.css-->
		<link rel="stylesheet" type="text/css" href="assets/css/contacto.css">

 		<!--SCRIPT DE JS-->
 		<script src="assets/js/jquery-latest.js"></script>
		<script src="assets/js/main.js"></script>

        <!--reCaptcha-->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	</head>	
<body>
    <div class="contenedor">
        <div class= "cabecera">

                <?php require_once 'includes/redesSociales.php'; ?>

				<div class="menu">
                	<?php require_once 'includes/menu.php'; ?>
				</div>
        </div>

        <div class="cuerpo">

            <div class="caja-1">

                <!--Titulo-->
                <h1>Contacto</h1>

                <!--Linea Horizontal-->
				<div class="linea-H"></div>

                <!--Texto-->
                <p>Estamos en pleno centro de la cuidad donde podés pasar una linda tarde tomando café, o también
                 podés realizar tus compras y disfrutar de la tranquilidad de una linda tarde.     
                </p>
				     
            </div>      
        </div>

        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4374958028034!2d-60.94762328423703!3d-34.5930970644442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b8eb29ab7afe81%3A0x91ed5230cdd76ce4!2sHotel%20Avenida!5e0!3m2!1ses-419!2sar!4v1610909785717!5m2!1ses-419!2sar" width=1910 height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        
        <?php require_once 'includes/footer.php'; ?>
    </div>


</body>

</html>