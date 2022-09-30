
<?php
    $controlador = 'controlador.php';
    $login = 'index.html';
    $nombre = $_POST['nombre'];
    $pass = $_POST['password'];
    
    
    $archivo = file_get_contents('./../Datos/archivo.txt');
    $arrayUser = explode(";", $archivo);

    foreach ($arrayUser as $key) {
        $users[explode(",",$key)[0]] = [explode(",",$key)[1], explode(",",$key[2])];
    }

    foreach ($users as $key => $value) {
        if ($nombre == $key && $pass == $value[0]) 
        {
            header("Location: ./../Vista/formularioAdmin.html");
            /*if ($value[1] == 'Admin') {
                header("Location: ./../Vista/formularioAdmin.html");
            }*/
        }
    }

    if (isset($_POST['password']) && empty($_POST['nombre']))
    echo "<span style='color:red'>Debes escribir en los apartados</span>"
?>
