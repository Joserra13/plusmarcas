<!DOCTYPE html>
<html lang="es">
<head>
    <title>Las Plusmarcas de Junglamás</title>
    <meta charset="UTF-8">                           <!--Meta indica que va a guardarse en codificacion UTF-8-->
    <meta name="description" content="">             <!--Descripcion de nuestra página HTML-->
    <meta name="keywords" content="Deportes">        <!--Keywords para cuando vayan a buscar nuestra pagina-->
    <meta name="viewport" content="width=device-width, initial-scale=0.4" /> <!--Hace la página adaptable-->
    
    <link href="styleAtl0.css" rel="stylesheet" type="text/css" />
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
                            <h1>Atletas</h1>                            
                            <h3>Busca a tu atleta favorito</h3>
                                                                                        
                            <form action="Atletas.php" method="get"><p>
                                Nombre: <input type="text" name="Nombre" size="15" required/>&nbsp&nbsp&nbsp
                                <input type="submit" id="Boton"/></p>
                            </form>
                            
                            <h3>Registra a un atleta</h3>
                                                                                        
                            <form action="RegistroAtleta.php" method="get"><p>
                                Nombre*: <input type="text" name="Nombre" size="15" required/>&nbsp&nbsp&nbsp
                                Pais*: <input type="text" name="Pais" size="15" required/><br><br>
                                Fecha de nacimiento*: <input type="date" name="Date" required/>&nbsp&nbsp&nbsp
                                Altura*: <input type="text" name="Altura" size="5" maxlength="5" required/><br><br>
                                Peso*: <input type="text" name="Peso" size="5" maxlength="5" required/>&nbsp&nbsp&nbsp
                                Numero favorito*: <input type="text" name="Numero" size="2" maxlength="2" required/><br><br>
                                Hobby*: <input type="text" name="Hobby" size="30" required/><br><br>
                                Comida favorita*: <input type="text" name="Comida" size="10" required/>&nbsp&nbsp&nbsp
                                Color favorito*: <input type="text" name="Color" size="10" maxlength="10" required/><br><br>
                                Foto: <input type="text" name="Foto" size="50"/><br>
                                (Para la foto, basta con poner un enlace de google imágenes)<br><br>
                                (*) Campos obligatorios<br><br>
                                <input type="submit" id="Boton"/></p>
                            </form>
                                           
                    </div>
                    <div id="footer"><p>This website is just a task for college so, no infringement of copyright is intended.</p></div>
            </div>
            <div id="imagepreloader"><img src="images/buttonover.gif" alt="mouseover" /></div>
    </div>
</body>
</html>
