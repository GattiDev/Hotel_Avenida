<!DOCTYPE HTML>
<html lang= "es">
	<head>		
		<meta charset="UTF-8">

		<title>GattiDev :: Hotel Avenida : Reservas</title>	
		
		<!--favicon.ico-->
		<link rel="shortcut icon" href="imag/logo/favicon.ico">

		<!--Redes sociales-->		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!--Importo style.css-->
		<link rel="stylesheet" type="text/css" href="assets/css/reservas.css">

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
                
                <div class="Formulario">

                <section>
                    <form action="enviar.php" method="post" class="form_contact">
                        
                        <!--Titulo-->
                        <h1>Reservas</h1>

                         <!--Linea Horizontal-->
				        <div class="linea-H"></div>

                        <!--Texto-->
                        <p>Complete el siguinte formulario para realizar su reserva o consulta.</p>

                        <!--Formulario-->
                        <div class="user_info">

                            <div class="info_left">
                                    <!--Nombre y Apellido-->
                                    <label for="nombre">Nombre y Apellido *</label><br/>
                                    <input class="nombre" type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><br/>

                                    <!--Empresa-->
                                    <label for="empresa">Empresa (opcional) </label><br/>
                                    <input class="empresa" type="text" name="empresa" pattern="[A-Za-z ]+"><br/>

                                    <!--Fecha de Llegada-->
                                    <label for="fecha">Fecha de llegada *</label><br/>
                                    <input class="fecha" type="date" name="fecha" required="required"><br/>                                
                            </div>

                            <div class="info_center">
                                <!--Correo-->
                                <label for="email">Email *</label><br/>
                                <input class="email" type="text" name="email" required="required"><br/>

                                <!--Localidad-->
                                <label for="localidad">Localidad *</label><br/>
                                <input class="localidad" type="text" name="localidad" required="required" pattern="[A-Za-z ]+"><br/>

                                <!--Fecha de Partida-->
                                <label for="fecha">Fecha de partida *</label><br/>
                                <input class="fechaL" type="date" name="fecha" required="required"><br/>                    
                            </div>


                            <div class="info_right">
                                <!--Telefono-->
                                <label for="telefono">Telefono * </label><br/>
                                <input class="telefono" type="text" name="telefono" required="required" pattern="[0-9- ]+"><br/>

                                <!--Provincia-->
                                <label for="provincia">Provincia *</label><br/>
                                <input class="provincia" type="text" name="provincia" required="required" pattern="[A-Za-z ]+"><br/>
                            </div>                  

                        
                            <!--Mesaje-->
                            
                            <div class="textarea-msj">
                                <p>Mensaje *</p>                            
                                <textarea class="mesaje" name="mesaje" required="required" placeholder="Consultar disponibilidad de la habitación deseada"></textarea><br/>
                            </div>

                            <!--reCaptcha-->
                            <div class="recaptcha">
                                <div class="g-recaptcha" data-sitekey="6Ld3g0caAAAAAItLPZggLpfWJJvzz-Bj1CALGlum" required="required" ></div>
                            </div>

                            <div class="enviar">
                                <input class="boton" type="submit" value="Enviar Mensaje" id="btnSend">
                            </div>
                            
                        </div>

                    </form>
                </section>

            </div>
                
            </div>
  
        </div>

        <?php require_once 'includes/footer.php'; ?>
    </div>


</body>

</html>