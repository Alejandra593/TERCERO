<?php
    error_reporting(0);
    $idusuario = $_REQUEST['idusuario'];
    $nombres = $_REQUEST['nombres'];
    $apellidos = $_REQUEST['apellidos'];
    $edad = $_REQUEST['edad'];
    $telefono = $_REQUEST['telefono'];
    $dui = $_REQUEST['dui'];
    $email = $_REQUEST['email'];
    $fecha_de_nacimiento = $_REQUEST['fecha_de_nacimiento'];

    $conexion = mysqli_connect('localhost', 'root', '','tercerodome')
    or die('problemas con la conexion');

    mysqli_query($conexion, "update usuarios set
                            nombres='$nombres',
                            apellidos='$apellidos',
                            edad='$edad',
                            telefono='$telefono',
                            dui='$dui',
                            email='$email',
                            fecha_de_nacimiento='$fecha_de_nacimiento' where idusuario='$idusuario'") or die('fallamos en actualizar los datos');

    header("location: http://localhost/TERCERO/ejemplo/guardado.php");

?>