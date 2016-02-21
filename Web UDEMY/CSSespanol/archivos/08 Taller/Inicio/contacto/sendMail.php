<?php 
$correo=$row_site_info['ciudad'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$celular=$_POST['celular'];
$mensaje=$_POST['mensaje'];

$cuerpo= "Ha recibido un mesaje de: $nombre

Datos enviados:

Email: $email
Telefono: $telefono 
Celular: $celular
Ciudad: $ciudad

Mensaje: $mensaje";
mail("marceb@gmail.com", "Mensaje desde www.xpert.co", $cuerpo,"From: Contacto_www.xpert.co");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/basica.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset="iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contacto</title>
<!-- InstanceEndEditable -->
<meta name="description" content="Agencia de viajes especializada en experiencias &uacute;nicas. Planes especiales.">
<meta name="keywords" content="Viajes, pasajes, Colombia, Planes, Promociones">

<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<link href="../css/main.css" rel="stylesheet">
<link href="../css/menu.css" rel="stylesheet">

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<div id="contenedor">
	<div id="encabezado">
    	<img src="../img/encabezado.jpg" alt="Imagen encabezado" />
        <img src="../img/logoExplora.png" alt="logo explora" id="logo"/>
    	<div id="menu">
            <ul>
              <li><a href="../index.htm">Inicio</a></li>
              <li><a href="../promociones.htm">Promociones</a></li>
              <li><a href="../nosotros.htm">Nosotros</a></li>
              <li><a href="contacto.htm">Contacto</a></li>
            </ul>
        </div>
    </div>
    <div id="contenido"><!-- InstanceBeginEditable name="contenido" -->
    <h1>Mensaje enviado!</h1>
    <p><img src="../img/correo.jpg" alt="enviado correos" width="600" height="399" class="fotos" /></p>
    <p>Pronto nos comunicaremos con usted.    </p>
    <!-- InstanceEndEditable --></div>
  <div id="lateral">
    	<img src="../img/bogota.jpg" width="200" height="200" alt="Bogota" class="fotos"/>
   	<h2>Promoci&oacute;n del mes</h2>
    	<p>Para el mes de Mayo te llevamos por un incre&iacute;­ble tour en la ciudad de Bogot&aacute; donde podr&aacute;s conocer los lugares m&aacute;s interesantes de esta ciudad. Ver m&aacute;s informaci&oacute;n...   </p>
    </div>
    <div id="pie">
    	<p>Explora, la empresa de viajes tur&iacute;­sticos l&iacute;­der de Colombia</p>
    	<p>Carrera 28 No. 28-124 - Los Ciruelos - Tel&eacute;fono (571-8943256)</p>
    	<p>Bogot&aacute; - Colombia</p>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
