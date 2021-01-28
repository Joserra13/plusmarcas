<?php

    //Aqui me va a llegar el valor añadir a la BBDD o eliminar de la tabla "solicitudes"

    //Caso de que me mande añadir a la tabla correspondiente.

    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);    
       
    $plusmarcas = mysqli_connect('localhost', 'root', '', 'plusmarcas') or die("Error de conexión".mysqli_error($plusmarcas));
    mysqli_set_charset($plusmarcas, "utf8");
    
    if($action == 'del')
    {
        $email = filter_input(INPUT_GET, 'Email', FILTER_SANITIZE_EMAIL);
        $nombre = filter_input(INPUT_GET, 'Nombre', FILTER_SANITIZE_STRING);
        $sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_STRING);
        $pais = filter_input(INPUT_GET, 'Pais', FILTER_SANITIZE_STRING);
        $prueba = filter_input(INPUT_GET, 'Prueba', FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_GET, 'Marca', FILTER_SANITIZE_STRING);
        $lugar = filter_input(INPUT_GET, 'Lugar', FILTER_SANITIZE_STRING);
        
        $query = "DELETE FROM solicitudes WHERE Email = '$email' AND Nombre = '$nombre' AND Competicion = '$prueba' AND Marca = '$marca'"
                . "AND Lugar = '$lugar'";
        
        //print "$query";
        
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                            
        mysqli_close($plusmarcas);
        
        header('location: Admin.php');
    }
    elseif($action == 'add')
    {        
        $email = filter_input(INPUT_GET, 'Email', FILTER_SANITIZE_EMAIL);
        $nombre = filter_input(INPUT_GET, 'Nombre', FILTER_SANITIZE_STRING);
        $sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_STRING);
        $pais = filter_input(INPUT_GET, 'Pais', FILTER_SANITIZE_STRING);
        $prueba = filter_input(INPUT_GET, 'Prueba', FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_GET, 'Marca', FILTER_SANITIZE_STRING);
        $lugar = filter_input(INPUT_GET, 'Lugar', FILTER_SANITIZE_STRING);
        
        $comp = $prueba;
                       
        if($sexo == "Masculino")
        {
            $prueba = $prueba . "h";
        }
        else
        {
            $prueba = $prueba . "w";
        }
        
        //print "$prueba";
        
        $query = "INSERT INTO $prueba (Nombre, Pais, Marca, Lugar)"
                          . " VALUES ('$nombre', '$pais', '$marca', '$lugar')";
        
        //print "$query";
        
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
        
        //Una vez copiado a la tabla correspondiente borramos el registro de la tabla solicitudes
        
        $query = "DELETE FROM solicitudes WHERE Email = '$email' AND Nombre = '$nombre' AND Competicion = '$comp' AND Marca = '$marca'"
                . "AND Lugar = '$lugar'";
        
        //print " $query";
        
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                            
        mysqli_close($plusmarcas);
        
        header('location: Admin.php');
    }

?>
