<!DOCTYPE html>
<html lang="es">
<head>
    <title>Las Plusmarcas de Junglamás</title>
    <meta charset="UTF-8">                           <!--Meta indica que va a guardarse en codificacion UTF-8-->
    <meta name="description" content="">             <!--Descripcion de nuestra página HTML-->
    <meta name="keywords" content="Deportes">        <!--Keywords para cuando vayan a buscar nuestra pagina-->
    <meta name="viewport" content="width=device-width, initial-scale=0.4" /> <!--Hace la página adaptable-->
    
    <link href="styleAdmin0.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
<div id="central">
	<div id="header"><a href="index.html">Las plusmarcas de junglamás</a></div>
    <ul id="navlist">
      <li><a id="n1" href="index.php"><span>Home</span></a></li>
      <li><a id="n2" href="Pruebas0.php"><span>Pruebas</span></a></li>
      <li><a id="n3" href="Atletas0.php"><span>Atletas</span></a></li>
      <li><a id="n4" href="Admin0.php"><span>Administrador</span></a></li>
    </ul>
	<div id="content">
		<div id="leftside">
			<div id="picture1"></div>

			<div id="picture2"></div>
                        <br>
		</div>
		<div id="rightside">
                    <h1>Administrador</h1>
                    <p>Bienvenido administrador, para acceder a las funcionalidades del administrador haz click en el botón "Acceder"</p>
                        
                    <?php
                        function obtenerDireccionIP()
                        {
                            if(!empty($_SERVER ['HTTP_CLIENT_IP']))
                            {
                              $ip = $_SERVER ['HTTP_CLIENT_IP'];
                            }
                            elseif(!empty($_SERVER ['HTTP_X_FORWARDED_FOR']))
                            {
                              $ip = $_SERVER ['HTTP_X_FORWARDED_FOR'];
                            }
                            else
                            {
                              $ip = $_SERVER ['REMOTE_ADDR'];
                            }

                            return $ip;
                        }
                        
                        function permitirIp($ip)
                        {
                            $ip = "127.0.0.1"; //Para dejar que solo una @ip pueda acceder al sitio del admin bastancon cambiar esta linea
                            $ipCliente = obtenerDireccionIP();

                            if($ipCliente == $ip)
                            {
                                header('location: Admin.php');
                                return true;
                            }
                            else
                            {
                                header('location: index.php');
                                exit;
                            }
                        }
                        
                        permitirIp();
                        
                    ?>
		</div>
		<div id="footer"><p>This website is just a task for college so, no infringement of copyright is intended.</p></div>
	</div>
	<div id="imagepreloader"><img src="images/buttonover.gif" alt="mouseover" /></div>
</div>
</body>
</html>