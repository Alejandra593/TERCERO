<?php
    $idusuario = $_REQUEST['idusuario'];
    $conexion = mysqli_connect('localhost', 'root', '', 'tercerodome') or die('error en la conexion');
    echo $idusuario;
    mysqli_query($conexion,"delete from usuarios where idusuario='$idusuario'") or die('error al borrar');
    header("location: http://localhost/TERCERO/ejemplo/guardado.php")
    


?>