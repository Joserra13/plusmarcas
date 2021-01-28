<!DOCTYPE html>
<html lang="es">
<head>
    <title>Las Plusmarcas de Junglamás</title>
    <meta charset="UTF-8">                           <!--Meta indica que va a guardarse en codificacion UTF-8-->
    <meta name="description" content="">             <!--Descripcion de nuestra página HTML-->
    <meta name="keywords" content="Deportes">        <!--Keywords para cuando vayan a buscar nuestra pagina-->
    <meta name="viewport" content="width=device-width, initial-scale=0.4" /> <!--Hace la página adaptable-->
    
    <link href="styleIndex.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
    <div id="central">
            <div id="header"><a href="index.php">Las plusmarcas de junglamás</a></div>
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
                    </div>
                    <div id="rightside">
                        <h1>Inicio</h1>
                        <p>Bienvenidos a Las Plusmarcas de Junglamás</p>
                        <p>
                            Este es un portal en el que nos preocupamos por el deporte amateur, 
                            y lo que queremos lograr con esto es darle visibilidad, mostrando las mejores marcas a nivel de España de 6 
                            pruebas diferentes.<br><br>

                            En la pestaña <a href="Pruebas0.php">Pruebas</a>, mostraremos los 5 mejores atletas en cada prueba de cada 
                            categoría (Masculina y Femenina).<br><br>

                            En la pestaña <a href="Atletas0.php">Atletas</a>, puedes buscar a tu atleta favorito y encontrar un pequeño
                            perfil donde detallaremos algun detalle personal.<br><br>

                            Además, a través de un formulario, os daremos la oportunidad de <a href="Pruebas0.php#Register">registrar</a>
                            vuestras propias marcas, que serán verificadas por un administrador y si resultan ser ciertas, no dudaremos
                            en publicarla en nuestro Top 5.
                        </p>

                        <h1>Próximos Eventos</h1>

                        <?php
                            $plusmarcas = mysqli_connect('localhost', 'root', '', 'plusmarcas') or
                                die("Error de conexión".mysqli_error($plusmarcas));
                            
                            mysqli_set_charset($plusmarcas, "utf8");
                            
                            $query = "SELECT * FROM eventos";
                            $result = mysqli_query($plusmarcas, $query);
                        ?>

                        <table>
                        <caption>Próximos eventos</caption>
                        <tr><th>Lugar</th><th>Fecha</th><th>Competición</th><th>Categoría</th></tr>

                        <?php                         
                            $i = 0;
                            while(++$i < 6 && $row = mysqli_fetch_array($result, MYSQLI_NUM))
                            {      
                                print "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";
                            }   
                        ?>
                        </table>
                        
                        <br>
                        
                        <h1>Registro evento</h1>
                    
                            <form action="RegistroEvento.php" method="get"><p>                        
                                Lugar: <input type="text" size="20" name="Lugar"required/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                Fecha: <input type="date" name="Date"required/><br><br>
                                Competición: <select name="Prueba" required>                    
                                                <option value="100mvallas">100m vallas</option>
                                                <option value="200mlisos">200m lisos</option>   
                                                <option value="jabalina">Lanzamiento de jabalina</option>
                                                <option value="pertiga">Salto de pértiga</option>
                                                <option value="triplesalto">Triple salto</option>                             
                                </select>
                                &nbsp&nbsp&nbsp&nbsp&nbsp
                                Categoría: <select name="Sexo" required>                            
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>                        
                                </select><br><br>
                                <input type="submit" id="Boton"/></p>                                          
                            </form>
                            
                    </div>
                    <div id="footer"><p>This website is just a task for college so, no infringement of copyright is intended.</p></div>
            </div>
            <div id="imagepreloader"><img src="images/buttonover.gif" alt="mouseover" /></div>
    </div>
</body>
</html>
