<!DOCTYPE html>
<html lang="es">
<head>
    <title>Las Plusmarcas de Junglamás</title>
    <meta charset="UTF-8">                           <!--Meta indica que va a guardarse en codificacion UTF-8-->
    <meta name="description" content="">             <!--Descripcion de nuestra página HTML-->
    <meta name="keywords" content="Deportes">        <!--Keywords para cuando vayan a buscar nuestra pagina-->
    <meta name="viewport" content="width=device-width, initial-scale=0.4" /> <!--Hace la página adaptable-->
    
    <link href="styleAtl.css" rel="stylesheet" type="text/css" />
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
                            <h1>Fanzone</h1><br>

                            <?php
                                
                                $plusmarcas = mysqli_connect('localhost', 'root', '', 'plusmarcas') or
                                die("Error de conexión".mysqli_error($plusmarcas));
                        
                                mysqli_set_charset($plusmarcas, "utf8");
                                                       
                                $nombre = filter_input(INPUT_GET, 'Nombre', FILTER_SANITIZE_STRING);
                                
                                $query = "SELECT Nombre, Pais, Fecha, Altura, Peso, Numero, Hobby, Comida, Color, Foto FROM ficha WHERE Nombre LIKE '$nombre%'";
                                $result = mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                                
                                $row = mysqli_fetch_array($result, MYSQLI_NUM);                                                                                      
                                                             
                                if($row[0]==NULL)
                                {
                                    header('location: Atletas0.php');
                                }
                                                             
                                if($row[9]==NULL)
                                {
                                    $row[9] = "default.jpg";
                                }                                
                                                                                                
                            ?>
                            
                            <p>
                                
                                <strong>Nombre: </strong><?=$row[0]?>&nbsp&nbsp&nbsp
                                <img src="images/<?=$row[9]?>" width="200" height="200" id="Foto" title="<?=$row[0]?>"/><br><br>
                                <strong>País: </strong><?=$row[1]?><br><br>
                                <strong>Fecha de nacimiento: </strong><?=$row[2]?><br><br>
                                <strong>Altura: </strong><?=$row[3]?>&nbsp&nbsp&nbsp
                                <strong>Peso: </strong><?=$row[4]?><br><br>
                                <strong>Numero favorito: </strong><?=$row[5]?><br><br>
                                <strong>Hobby: </strong><?=$row[6]?><br><br>
                                <strong>Comida favorita: </strong><?=$row[7]?><br><br>
                                <strong>Color favorito: </strong><?=$row[8]?>                               
                                                            
                            </p>
                            
                    </div>
                    <div id="footer"><p>This website is just a task for college so, no infringement of copyright is intended.</p></div>
            </div>
            <div id="imagepreloader"><img src="images/buttonover.gif" alt="mouseover" /></div>
    </div>
</body>
</html>
