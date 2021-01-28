<?php

    //Aqui me va a llegar el valor añadir a la BBDD o eliminar de la tabla "solicitudes"

    //Caso de que me mande añadir a la tabla correspondiente.

    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);    
       
    $plusmarcas = mysqli_connect('localhost', 'root', '', 'plusmarcas') or die("Error de conexión".mysqli_error($plusmarcas));
    mysqli_set_charset($plusmarcas, "utf8");
    
    if($action == 'del')
    {
        $lugar = filter_input(INPUT_GET, 'Lugar', FILTER_SANITIZE_STRING);
        $date = $_REQUEST["Fecha"];
        $prueba = filter_input(INPUT_GET, 'Prueba', FILTER_SANITIZE_STRING);
        $sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_STRING);
        
        $query = "DELETE FROM solevent WHERE Lugar = '$lugar' AND Fecha = '$date' AND Competicion = '$prueba' AND Sexo = '$sexo'";            
              
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                            
        mysqli_close($plusmarcas);
        
        header('location: Admin.php');
    }
    elseif($action == 'add')
    {        
        $lugar = filter_input(INPUT_GET, 'Lugar', FILTER_SANITIZE_STRING);
        $date = $_REQUEST["Fecha"];
        $prueba = filter_input(INPUT_GET, 'Prueba', FILTER_SANITIZE_STRING);
        $sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_STRING);
                        
        $query = "INSERT INTO eventos (Lugar, Fecha, Competicion, Sexo)"
                          . " VALUES ('$lugar', '$date', '$prueba', '$sexo')";
 
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
        
        //Una vez copiado a la tabla correspondiente borramos el registro de la tabla solicitudes
        
        $query = "DELETE FROM solevent WHERE Lugar = '$lugar' AND Fecha = '$date' AND Competicion = '$prueba' AND Sexo = '$sexo'";
                
        mysqli_query($plusmarcas, $query) or die("Error de conexión".mysqli_error($plusmarcas));
                            
        mysqli_close($plusmarcas);
        
        header('location: Admin.php');
    }

?>
