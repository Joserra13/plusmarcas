<!DOCTYPE html>
<html lang="es">
<head>
    <title>Las Plusmarcas de Junglamás</title>
    <meta charset="UTF-8">                           <!--Meta indica que va a guardarse en codificacion UTF-8-->
    <meta name="description" content="">             <!--Descripcion de nuestra página HTML-->
    <meta name="keywords" content="Deportes">        <!--Keywords para cuando vayan a buscar nuestra pagina-->
    <meta name="viewport" content="width=device-width, initial-scale=0.4" /> <!--Hace la página adaptable-->
    
    <link href="styleAdmin.css" rel="stylesheet" type="text/css" />
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
                    <h1>Bienvenido administrador!</h1>
                    <h3>Plusmarcas registradas</h3>
                    
                    <p>
                    
                        <?php

                            //Ahora tengo que sacar por pantalla la tabla que me pida

                            $plusmarcas = mysqli_connect('localhost', 'root', '', 'plusmarcas') or
                                          die("Error de conexión".mysqli_error($plusmarcas));
                            
                            mysqli_set_charset($plusmarcas, "utf8");

                            $query = "SELECT * from solicitudes";
                            $result = mysqli_query($plusmarcas, $query);
                            
                        ?>
                        
                        <table>
                        <caption>Solicitudes</caption>
                        <tr><th>Email</th><th>Nombre</th><th>Sexo</th><th>Pais</th><th>Competición</th><th>Marca</th><th>Lugar</th></tr>
                        
                        <?php

                            /* array numérico */                                        

                            while($row = mysqli_fetch_array($result, MYSQLI_NUM))
                            {                                            
                                print "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}"
                                . "</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td><td>{$row[6]}</td></tr>"
                                . "<tr><td><form action='gestion.php' method='get'><select name='action' required><option value='del'>Eliminar</option>"
                                . "<option value='add'>Añadir</option></select></td>"
                                . "<input type='hidden' name='Email' value='{$row[0]}'/>"
                                . "<input type='hidden' name='Nombre' value='{$row[1]}'/>"
                                . "<input type='hidden' name='Sexo' value='{$row[2]}'/>"
                                . "<input type='hidden' name='Pais' value='{$row[3]}'/>"
                                . "<input type='hidden' name='Prueba' value='{$row[4]}'/>"
                                . "<input type='hidden' name='Marca' value='{$row[5]}'/>"
                                . "<input type='hidden' name='Lugar' value='{$row[6]}'/>"
                                . "<td><input type='submit' value='Enviar'/></form></td></tr>";                                          
                            }
                        ?>
                        
                        </table><br>
                    
                    <h3>Eventos registrados</h3>
                        
                        <?php
                        
                            $query = "SELECT * from solevent";
                            $result = mysqli_query($plusmarcas, $query);
                            
                        ?>
                            
                        <table>
                        <caption>Solicitudes</caption>
                        <tr><th>Lugar</th><th>Fecha</th><th>Competición</th><th>Categoría</th></tr>
                        
                        <?php

                            /* array numérico */                                        

                            while($row = mysqli_fetch_array($result, MYSQLI_NUM))
                            {                                            
                                print "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}"
                                . "</td><td>{$row[3]}</td></tr>"
                                . "<tr><td><form action='gestionevent.php' method='get'><select name='action' required>"
                                . "<option value='del'>Eliminar</option>"
                                . "<option value='add'>Añadir</option></select></td>"
                                . "<input type='hidden' name='Lugar' value='{$row[0]}'/>"
                                . "<input type='hidden' name='Fecha' value='{$row[1]}'/>"
                                . "<input type='hidden' name='Prueba' value='{$row[2]}'/>"
                                . "<input type='hidden' name='Sexo' value='{$row[3]}'/>"                                
                                . "<td><input type='submit' value='Enviar'/></form></td></tr>";                                          
                            }
                        ?>
                        
                        </table><br>
                    
                    <h3>Atletas registrados</h3>
                        
                        <?php
                        
                            $query = "SELECT * from solficha";
                            $result = mysqli_query($plusmarcas, $query);
                            
                        ?>
                            
                        <table>
                        <caption>Solicitudes</caption>
                        <tr><th>Nombre</th><th>Pais</th><th>Fecha</th><th>Altura</th><th>Peso</th><th>Numero</th>
                            <th>Hobby</th><th>Comida</th><th>Color</th></tr>
                        
                        <?php

                            /* array numérico */                                        

                            while($row = mysqli_fetch_array($result, MYSQLI_NUM))
                            {                                            
                                print "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}"
                                . "</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td><td>{$row[6]}</td>"
                                . "<td>{$row[7]}</td><td>{$row[8]}</td></tr>"
                                . "<tr><td><form action='gestionatleta.php' method='get'><select name='action' required>"
                                . "<option value='del'>Eliminar</option>"
                                . "<option value='add'>Añadir</option></select></td>"
                                . "<input type='hidden' name='Nombre' value='{$row[0]}'/>"
                                . "<input type='hidden' name='Pais' value='{$row[1]}'/>"
                                . "<input type='hidden' name='Date' value='{$row[2]}'/>"
                                . "<input type='hidden' name='Altura' value='{$row[3]}'/>"
                                . "<input type='hidden' name='Peso' value='{$row[4]}'/>"                                
                                . "<input type='hidden' name='Numero' value='{$row[5]}'/>"
                                . "<input type='hidden' name='Hobby' value='{$row[6]}'/>"
                                . "<input type='hidden' name='Comida' value='{$row[7]}'/>"
                                . "<input type='hidden' name='Color' value='{$row[8]}'/>"
                                . "<input type='hidden' name='Foto' value='{$row[9]}'/>"
                                . "<td><input type='submit' value='Enviar'/></form></td></tr>";                                          
                            }
                        ?>
                        
                        </table>
                    
                        
                        <?php

                            mysqli_close($plusmarcas);

                        ?>
                    </p>
                                			
		</div>
		<div id="footer"><p>This website is just a task for college so, no infringement of copyright is intended.</p></div>
	</div>
	<div id="imagepreloader"><img src="images/buttonover.gif" alt="mouseover" /></div>
</div>
</body>
</html>