<?php
    $ciudad = $_POST["ciudad"];
    $horaLocal = $_POST["horaLocal"];
    $temperatura = $_POST["temperatura"];
    $sensacion = $_POST["sensacion"];                   //Obtengo los valores que son pasados por el post
    $velocidadViento = $_POST["velocidadViento"];
    $precipitacion = $_POST["precipitacion"];
    $humedad = $_POST["humedad"];

    $servidor="localhost";
    $usuario="root";
    $clave=""; 
  
  @$mysqli = new mysqli($servidor,$usuario,$clave);  //Realizo la conexion a la BD
  if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $mysqli->connect_error. " ". $mysqli->connect_errno ;
      die (" SALIDA DEL PROGRAMA. Error acceso a BBDD");
  }
  else  
  
  $basedatos="weatherapi";
  mysqli_select_db($mysqli,$basedatos);               //Selecciono la base de datos

  $sql = "INSERT INTO datos (ciudad,fecha_hora,temperatura,sensacion_termica,velocidad_direccion_viento,precipitacion,humedad) VALUES ('$ciudad','$horaLocal','$temperatura','$sensacion','$velocidadViento','$precipitacion','$humedad')";
        if (!$resultado=$mysqli->query($sql))                           //Envio la insercion de los campos a la BD
        {echo "Lo sentimos. La Aplicación no funciona<br>";
         echo "Error. en la consulta: ".$consulta."<br>";
         echo "Num.error: ".$mysqli->errno."<br>";
         echo "Error: ".$mysqli->error. "<br>";
         exit;
        } 
?>