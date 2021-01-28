<?php

    //Aqui me va a llegar el valor añadir a la BBDD o eliminar de la tabla "solicitudes"

    //Caso de que me mande añadir a la tabla correspondiente.

    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);    
       
    $plusmarcas = mysqli_connect('localhost', 'root', '', 'plusmarcas') or die("Error de conexión".mysqli_error($plusmarcas));
    mysqli_set_charset($plusmarcas, "utf8");
    
    if($action == 'del')
    {
        $nombre = filter_input(INPUT_GET, 'Nombre', FILTER_SANITIZE_STRING);
        $pais = filter_input(INPUT_GET, 'Pais', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_GET, 'Date', FILTER_SANITIZE_STRING);
        $altura = filter_input(INPUT_GET, 'Altura', FILTER_SANITIZE_STRING);
        $peso = filter_input(INPUT_GET, 'Peso', FILTER_SANITIZE_STRING);
        $numero = filter_input(INPUT_GET, 'Numero', FILTER_SANITIZE_STRING);
        $hobby = filter_input(INPUT_GET, 'Hobby', FILTER_SANITIZE_STRING);
        $comida = filter_input(INPUT_GET, 'Comida', FILTER_SANITIZE_STRING);
        $color = filter_input(INPUT_GET, 'Color', FILTER_SANITIZE_STRING);
        $foto = filter_input(INPUT_GET, 'Foto', FILTER_SANITIZE_STRING);
        
        $query = "DELETE FROM solficha WHERE Nombre = '$nombre' AND Pais = '$pais' AND Numero = '$numero' AND Comida = '$comida'";            
              
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                            
        mysqli_close($plusmarcas);
        
        header('location: Admin.php');
    }
    elseif($action == 'add')
    {        
        $nombre = filter_input(INPUT_GET, 'Nombre', FILTER_SANITIZE_STRING);
        $pais = filter_input(INPUT_GET, 'Pais', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_GET, 'Date', FILTER_SANITIZE_STRING);
        $altura = filter_input(INPUT_GET, 'Altura', FILTER_SANITIZE_STRING);
        $peso = filter_input(INPUT_GET, 'Peso', FILTER_SANITIZE_STRING);
        $numero = filter_input(INPUT_GET, 'Numero', FILTER_SANITIZE_STRING);
        $hobby = filter_input(INPUT_GET, 'Hobby', FILTER_SANITIZE_STRING);
        $comida = filter_input(INPUT_GET, 'Comida', FILTER_SANITIZE_STRING);
        $color = filter_input(INPUT_GET, 'Color', FILTER_SANITIZE_STRING);
        $foto = filter_input(INPUT_GET, 'Foto', FILTER_SANITIZE_STRING);
                        
        $query = "INSERT INTO ficha (Nombre, Pais, Fecha, Altura, Peso, Numero, Hobby, Comida, Color, Foto)"
                                      . " VALUES ('$nombre','$pais','$date','$altura','$peso','$numero','$hobby','$comida','$color','$foto')";
 
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
        
        //Una vez copiado a la tabla correspondiente borramos el registro de la tabla solicitudes
        
        $query = "DELETE FROM solficha WHERE Nombre = '$nombre' AND Pais = '$pais' AND Numero = '$numero' AND Comida = '$comida'";
                
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                            
        mysqli_close($plusmarcas);
        
        header('location: Admin.php');
    }

?>
