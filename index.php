<!DOCTYPE HTML>
<html lang= "es">
	<head>		
		<meta charset="UTF-8">

		<!--Autores-->
		<!--Desarrollador-->
		<meta name="author" content="Ezequiel Gatti" />
		<!--Diseñador-->
		<meta name="author" content="Álvaro Valero" />
		<!--Fecha que fue Desarrollado-->
		<meta name="fecha" content="01-03-2021" />


		<title>GattiDev :: Hotel Avenida</title>	
		
		<!--favicon.png-->
		<link rel="shortcut icon" href="imag/logo/favicon.png">

		<!--Redes sociales-->		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!--Importo style.css-->
		<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

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
				<h1>Tu hogar fuera de casa</h1>	
				
				<!--Linea Horizontal-->
				<div class="linea-H"></div>

				<!--Imagen-->
                <div class="img-1">
                    <img class="logo" src="imag/imagenes/Servicios y comodidades.png"  />
                </div>
				

				<!--Linea vertical-->				
				<div class= "linea-V"></div>	

                <!--Texto-->
                <div class="texto-1">
				
					<div class= "texto-a">
					
						<p>	Somos un hotel con más de 120 años de historia en la ciudad de Junín. 
							Brindamos la mejor atención y un trato cálido y cordial para que nuestros huéspedes se sientan como en casa.
							<br/>
							<br/>
						</p>
					</div>
						<div class= "texto-b">
							<p>
								Nuestra recepción funciona las 24hs todos los días del año. 
								Así, no solo facilitamos la hora de llegada y salida de nuestros huéspedes, 
								sino que también estamos atentos a cualquier necesidad que surja a lo largo del día o de la noche.
								<br/>
								<br/>
									• Contamos con un rincón de lectura destinado a la comodidad, reflexión y a la imaginación.<br/>   
									• Servicio de asistencia médica las 24hs.<br/> 
									• Servicio de lavandería bajo petición. <n>Somos eco friendly.</n><br/>
									• Servicio de cochera adicional a muy bajo costo.<br/> 
									• Guías de turismo, compras y caminatas por el casco histórico.<br/> 
									• Paseos y camping en la laguna.<br/> 
									• Wi-fi gratuito en todo el establecimiento.<br/> 
									• Salón para conferencias.<br/> 
									• Desayunos incluídos.<br/> 
									• <n>Somos Pet Friendly.</n>
							</p>	
						</div>
					</div>
                </div>
                
            </div>
            
            <div class="caja-2">
            
            
                <!--Sub Titulo-->
				<h1>Un poco de historia</h1>
					
                <!--Linea Horizontal-->
                <div class="linea-H2"></div>

                <!--Texto-->
                <div class="texto-2">
                    <p>El <n>Hotel Avenida</n> está situado en el centro de la ciudad, es un edificio que está divido en dos pisos. <br/>
						Esta propiedad data desde el <n>siglo XIX</n>, y por lo que sabemos funciona como hotel desde su origen. 
						Por esta razón aún quedan algunos detalles originales de aquella época, un buen ejemplo de esto es nuestro living. 
						Y todavía están presentes muchos de los elementos auténticos en la mayoría de las habitaciones que el hotel alberga. <br/>
						A lo largo de su historia el hotel ha recibido a muchos huéspedes importantes. Por esto tratamos de preservarlo a 
						través del tiempo.</p> <br/>
						<br/>  
						<p>Nuestro living es un espacio destinado a reuniones de trabajo, a reuniones familiares, para discutir negocios, e 
						incluso para tomar un mate y leer un buen libro de nuestra biblioteca. Es un ambiente cómodo y acogedor, un 
						rincón de lectura destinado a la tranquilidad, a la comodidad, la reflexión y a la imaginación.
					</p>
                </div>

                <!--Linea vertical-->
				<div class= "linea-V2"></div>	
				
				<!--Imagen--> 			
				<div class=img-2>
					<img class="logo" src="imag/imagenes/Un poco de historia.jpg" /> 
                </div>
            </div>
        </div>

        <?php require_once 'includes/footer.php'; ?>
    </div>
</body>
</html>