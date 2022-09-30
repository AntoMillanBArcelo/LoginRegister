<?php
    $user = $_POST['nombre'];
    $pass = $_POST['pass'];
    $fichero = './../Datos/archivo.txt';
    $rol = $_POST['tipo'];

    $FConetenido = file_get_contents($fichero);
    $FConetenido .= $user.','.$pass.','.$rol.';';
    $array = explode(";", $FConetenido);
    
    foreach ($array as $key ) {
        print "Nombre: ".$key."<br />";
     }

    if(file_put_contents($fichero, $FConetenido))
    {
        echo"<h3>Usuario registrado</h3><br>";
        echo "<a href='./../Vista/index.html'>Log off<br>";
        echo "<a href='./../Vista/formularioAdmin.html'>Añadir usuario";
    }

    
?>