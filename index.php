﻿<?php

session_start();
error_reporting(0);
include_once('./css/index.php');
include_once('./foro/integrado.php');

if($activar_apsa == 1) 
{
	include_once('apsa/wp-blog-header.php');
}

if(isset($_SESSION['User']))
{
    $User = $_SESSION['User'];
	try
	{
		$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
		$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
		$stmt->execute();
		

		$datos = $stmt->fetch();

		$name = $datos['Username'];
		$money = $datos['Money'];
		$score = $datos['Nivel'];
		$fz = $datos['Moneda'];
		$validarcorrero = $datos['CorreoValido'];
		$cambiacorreo = $datos['CambiaCorreo'];
		$correoacambiar = $datos['CorreoACambiar'];
		$tiempocorreo = $datos['TiempoCorreo'];
		$email = $datos['Email'];
		$ropa = $datos['Skin'];
		$platabanco = $datos['Banco'];
		$faccion = $datos['Faccion'];
		$razon = $datos['razon'];
		$ban = $datos['Baneado'];
		$Conexion = $datos['Conexion'];
		$admin = $datos['Admin'];
		unset($datos); //borrar variable datos que ocupa memoria
	}
	catch(PDOException $e)
	{
		echo 'Error: ' . $e->getMessage();
	}
}

$dinerototal = $money+$platabanco;

if($Conexion == '1')
{
	echo "<script>window.location='reg.php?u=2';</script>";
}

require("./conectados/samp_query.php");
try
{
    $rQuery = new QueryServer( $serverIP2, $serverPort );

    $aInformation = $rQuery->GetInfo( );
    $aServerRules = $rQuery->GetRules( );
    $aBasicPlayer = $rQuery->GetPlayers( );
    $aTotalPlayers = $rQuery->GetDetailedPlayers( );

    $rQuery->Close( );
}
catch (QueryServerException $pError)
{

}

$principalAC = "-ac";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Anuncio -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1072011961085613",
    enable_page_level_ads: true
  });
</script>
<!-- Anuncio -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title><?php echo $NombreServidor?> Roleplay - San Andreas Multiplayer (SAMP en Español)</title>
<style>
.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}
</style>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" href="./css/default.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen"/>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
</head>
<body>


<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
<tr>
<td width="997">

<?php include('header.php') ?>

<!-- ANUNIO -->
<?php if($activar_pr == 1){?>

<link rel="stylesheet" href="./css/popup-azul2.css" type="text/css" media="screen"/>
<div id="popup1" style="top: 50%;left: 50%;position: absolute;">
<div class="overlay" id="overlay">
<div class="popup" id="rect">
<span class="close" title="Cerrar" id="cerrar" style="background-color:transparent;">&times;</span>
<div class="content">
<div class="popup-caption" style="display: block; padding: 10px;top: 0;left: 0;">
<span style="" id="msnd">
<span style="font-family: 'Oswald', sans-serif; font-size:22px;">VIP CZ EN <font color="#<?php echo $color_cuadro2;?>">VENTA</font></span>
<br>Membresías nuevas con beneficios únicos como 8 vehículos, 50% reducción de tiempo de carcel y 16 objetos para tuneo.
</span>
</div>
<div class="popup-caption" style="display: block; padding: 10px; bottom:0; left: 0;">
<span style="" id="msnd">
<span style="font-family: 'Oswald', sans-serif; font-size:18px;" class="botoncomprar"><a href="comprar-vip.php"><font color="#<?php echo $color_cuadro2;?>">VER PRECIO</font></a></span>
<br>¡Ya en venta!
</span>
</div>
<div id="efecto-fuego"></div>
<div id="efecto-fuego2"></div>
<div id="logo-min"></div>
</div>
</div>
</div>
</div>
<!-- PRENDAS
<link rel="stylesheet" href="./css/popup-azul2.css" type="text/css" media="screen"/>
<div id="popup1" style="top: 50%;left: 50%;position: absolute;">
<div class="overlay" id="overlay">
<div class="popup" id="rect">
<span class="close" title="Cerrar" id="cerrar" style="background-color:transparent;">&times;</span>
<div class="content">
<div class="popup-caption" style="display: block; padding: 10px;top: 0;left: 0;">
<span style="" id="msnd">
<span style="font-family: 'Oswald', sans-serif; font-size:22px;"><?php echo $Texto_Index_65;?> <font color="#<?php echo $color_cuadro;?>"><?php echo $Texto_Index_66;?></font></span>
<br><?php echo $Texto_Index_67;?>.
</span>
</div>
<div class="popup-caption" style="display: block; padding: 10px; bottom:0; left: 0;">
<span style="" id="msnd">
<span style="font-family: 'Oswald', sans-serif; font-size:18px;" class="botoncomprar"><a href="comprar-prendas.php"><font color="#<?php echo $color_cuadro;?>"><?php echo $Texto_Index_68;?></font></a></span>
<br><?php echo $Texto_Index_69;?>.
</span>
</div>
<div id="efecto-fuego"></div>
<div id="efecto-fuego2"></div>
<div id="logo-min"></div>
</div>
</div>
</div>
</div>
-->
<script type="text/javascript">
    $("#cerrar").click(function(){
		$("#popup1").hide();
	});
	 $("#overlay").click(function(event){
		 if($(event.target).html().indexOf("rect") >= 0){
		 	$("#popup1").hide();
		 }
	});
</script>
<?php } ?>
<!-- ANUNIO -->

<div id="contenido">
<div id="contenido-izquierdo">

<div class="td-gr">
<div class="icono-td"><img src="./imagenes/iconos/ctrl.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $NombreServidor?> - Roleplay</div>
<div style="height:190px; background-color:#FFF; padding-top:131px; padding-left:325px;" id="cargando-slider"><img src="./imagenes/cargando_g.gif"/></div>
<div id="wrapper">

<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">
<img src="./imagenes/slider/1.gif" data-thumb="./imagenes/slider/1.gif" alt="" title="#tab-carreras"/>
<img src="./imagenes/slider/2.gif" data-thumb="./imagenes/slider/2.gif" alt="" title="#tab-restaurante"/>
<img src="./imagenes/slider/3.gif" data-thumb="./imagenes/slider/3.gif" alt="" title="#tab-policia"/>
<img src="./imagenes/slider/4.gif" data-thumb="./imagenes/slider/4.gif" alt="" title="#tab-medico"/>
<img src="./imagenes/slider/5.gif" data-thumb="./imagenes/slider/5.gif" alt="" title="#tab-autos"/>
<img src="./imagenes/slider/6.gif" data-thumb="./imagenes/slider/6.gif" alt="" title="#tab-municipalidad"/>
</div>
<div id="tab-carreras" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;"><?php echo $Texto_Index_41;?> <font color="#FF9900"><?php echo $Texto_Index_42;?></font></span>
<br><?php echo $Texto_Index_43;?>.
</span>
</div>
<div id="tab-restaurante" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;"><?php echo $Texto_Index_29;?> <font color="#FF9900"><?php echo $Texto_Index_30;?></font></span>
<br><?php echo $Texto_Index_31;?>.
</span>
</div>
<div id="tab-policia" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;"><?php echo $Texto_Index_32;?> <font color="#FF9900"><?php echo $Texto_Index_33;?></font></span>
<br><?php echo $Texto_Index_34;?>.
</span>
</div>
<div id="tab-medico" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;"><?php echo $Texto_Index_35;?> <font color="#FF9900"><?php echo $Texto_Index_36;?></font></span>
<br><?php echo $Texto_Index_37;?>.
</span>
</div>
<div id="tab-autos" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;"><?php echo $Texto_Index_38;?> <font color="#FF9900"><?php echo $Texto_Index_39;?></font></span>
<br><?php echo $Texto_Index_40;?>.
</span>
</div>
<div id="tab-municipalidad" class="nivo-html-caption">
<span id="msn" style="display:none;">
<span style="font-family: 'Oswald', sans-serif; font-size:20px;"><?php echo $Texto_Index_26;?> <font color="#FF9900"><?php echo $Texto_Index_27;?></font></span>
<br><?php echo $Texto_Index_28;?>.
</span>
</div>
</div>

<script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
      effect: 'boxRain',
      pauseTime: 8000,
      beforeChange: function(){
        $('#msn').hide();
        $(".nivo-caption").hide();
        $(".nivo-caption").css("padding","0");
      },
      afterChange: function(){
        $(".nivo-caption").css("padding","10px");
        $(".nivo-caption").fadeIn(1000);
        $('#msn').fadeIn(1500);
      },
      afterLoad: function(){
        $('#cargando-slider').hide();
        $(".nivo-caption").css("padding","10px");
        $(".nivo-caption").fadeIn(1000);
        $('#msn').fadeIn(1500);
      }
    });
    });
	</script>
</div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/iconos/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Actualizaci&oacute;n obligatoria del cliente de SA-MP</a>
</div>
<div class="news_body" style="padding: 10px;">
<strong>Para jugar en <?php echo $NombreServidor?> apartir de hoy necesitar&aacute;n instalar la versi&oacute;n 0.3.7 de SAMP.</strong><br/><br/>Si no la instalan, no podr&aacute;n entrar a jugar en nuestros servidores. <br/>A continuaci&oacute;n dejamos diferentes enlaces para que descarguen el nuevo cliente.<br/><br/><div align="center"><a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe" class="bbc_link" target="_blank" id="linkbbc"><img src="./imagenes/037es.png" alt="" class="bbc_img"/></a><br/></div><br/>Enlace de descarga 1: <strong><a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe" class="bbc_link" target="_blank" id="linkbbc">http://files.sa-mp.com/sa-mp-0.3.7-install.exe</a></strong><br/><br/>Si tienen alguna duda o problema, publiquen en el foro para que podamos ayudarlos.<div class="hr"></div>
<div><a href="#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/iconos/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Nuevo servidor</a>
</div>
<div class="news_body" style="padding: 10px;">El servidor, como as&iacute tambi&eacuten la web, se encuentran en construcci&oacuten. En este foro podr&aacuten ver los cambios realizados en cada versi&oacuten de <strong><?php echo strtoupper($Diminutivo)?>:RP</strong><br>
  <br>Aprovecho para avisarles que por el momento no necesitamos admins.<br><br>Un saludo<div class="hr"></div>
<div><a href"#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/iconos/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Informaci&oacute;n importante</a>
</div>
<div class="news_body" style="padding: 10px;">Ya no se sacan bans, as&iacute; que ya saben, <strong>si no quieren ser baneados, no usen cheats</strong>. Mensajes privados por asuntos de baneos ser&aacute;n ignorados. Si crean temas en el foro reclamando por alg&uacute;n ban, se les banear&aacute; la cuenta del foro tambi&eacute;n.<div class="hr"></div>
<div><a href="#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/iconos/nuevo.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">
<a href="#">Cambios y mejoras en el servidor</a>
</div>
<div class="news_body" style="padding: 10px;"><ul class="bbc_list"></ul>
<strong><span style="color: orange;" class="bbc_color"><span style="font-size: 13pt;" class="bbc_size">Cambios <?php echo strtoupper($Diminutivo)?>:RP</span></span></strong><br/>
<br/>
<strong>

<span style="color: red;" class="bbc_color">v1.34</span></strong><br/>
<ul>
                  <li>Se optimizaron algunos Timers de la GM.</li>
				  <li>Se eliminaron algunos mapeos.</li>
				  <li>Se cambi&oacute; el velocimetro.</li>
				  <li>Se añadieron textos en textdraw.</li>
				  <li>Se modificaron los stats de regalo.</li>
				  <li>Ahora de m&aacute;ximo de integrantes en una banda es de 30.</li>
				  <li>Se agregaron nuevos mapeos.</li>
				  <li>Se reprogram&oacute; el sistema de Mejora de Motor.</li>
				  <li>Ahora la mejora de motor cuesta 100 Totems.</li>
				  <li>Ahora se podr&aacute; conseguir totems en el trabajo de Pescador y Basurero.</li>
				  <li>Ahora los SAPD podr&aacute;n ponerse Escudos.</li>
            </ul>
          <strong>
		  
		  <span style="color: green;" class="bbc_color">v1.20</span></strong><br/>
<ul>
                  <li>Se agregaron mas rutas para el trabajo de basurero.</li>
            </ul>
          <strong>
		  
		  <span style="color: black;" class="bbc_color">v1.19</span></strong><br/>
          <ul>
          <li>Se corrigieron algunos errores.</li>
		  <li>Se agregaron algunos veh&iacute;culos a la venta en el concesionario de Coches baratos y San Fierro.</li>
		  <li>Se modificaron algunos mapeos.</li>
          </ul>
          <strong><span style="color: black;" class="bbc_color">v1.18</span></strong><br/>
          <ul>
            <li>Ahora se podra tener como maximo 4 vehiculos.</li>
			<li>Se modificaron algunos mapeos.</li>
			<li>Se corrigieron algunos errores.</li>
			<li>Se agregaron objetos que seran usados al portar ciertas armas.</li>
			<li>Se agregaron algunos comandos administrativos.</li>
			<li>Se mejor&oacute; el anticheats.</li>
			<li>Ahora no se podran utilizar vehiculos cuando estas herido.</li>
			<li>Se agrego un interior de oficina.</li>
          </ul>
		  <BR>
          <div class="hr">
		  </div>
<div><a href="#">0 comentarios</a> | <a href="#">Escribir comentario</a></div></div>
</div>
</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>