<?php
    error_reporting(0);
    $nombres = $_REQUEST['nombres'];
    $apellidos = $_REQUEST['apellidos'];
    $edad = $_REQUEST['edad'];
    $telefono = $_REQUEST['telefono'];
    $dui = $_REQUEST['dui'];
    $email = $_REQUEST['email'];
    $fecha_de_nacimiento = $_REQUEST['fecha_de_nacimiento'];

#conexion a base de datos
$conexion = mysqli_connect('localhost', 'root', '','tercerodome')
 or die('problemas con la conexion');

#query para insertar datos
if ($nombres != '' && $apellidos != '' && $edad !='') {
    mysqli_query($conexion,"insert into usuarios (
    nombres,
    apellidos,
    edad,
    telefono,
    dui,
    email,
    fecha_de_nacimiento
) values('$nombres',
         '$apellidos',
         '$edad',
         '$telefono',
         '$dui',
         '$email',
    '$fecha_de_nacimiento')")
    or die('Problema en insertar '. mysqli_error($conexion));


}

$usuarios = mysqli_query($conexion,"select 
                       idusuario,
                       nombres,
                       apellidos,
                       edad,
                       telefono,
                       dui,
                       email,
                       fecha_de_nacimiento from
                       usuarios") or die ('error en la consulta' . mysqli_error($conexion)); 
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="Indigo">
    <div class="nav-wrapper"> 
        <ul>
            <li><a href="http://localhost/TERCERO/ejemplo/guardado.php">Listado</a></li>
            <li><a href="http://localhost/TERCERO/ejemplo/registro.html">Nuevo</a></li></li>
        </ul>
    </div>
</nav>
    <div class="container">
        <div class="row">
             <!-- <div class="col s12 m6">
                <div class="card indigo lighten-3">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo $nombres." ".$apellidos; ?></span>
                            <p>
                                Edad: <?php echo $edad; ?>
                            </p>
                            <p>
                                 DUI: <?php echo $dui; ?>
                            </p>
                            <p>
                                email: <?php echo $email ?>
                            </p>
                        </div>
                    <div class="card-action">
                    <a href="" class="btn green"><i class="material-icons left">phone</i><?php echo $telefono; ?></a>
                    <a href="" class="btn blue lithten-5"><i class="material-icons left">mail</i><?php echo $email; ?></a>
                </div>
            </div> -->
        </div>
        <h1>DATOS GUARDADOS</h1>
        <table>
            <thead>
                <tr>
                <th>Id</th>
                <th>nombres</th>
                <th>apellidos</th>
                <th>edad</th>
                <th>telefono</th>
                <th>DUI</th>
                <th>email</th>
                <th>Fecha de nacimiento</th>
                <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($registro = mysqli_fetch_array($usuarios)) {
                        echo "<tr>";
                        echo "<td>".$registro['idusuario']."</td>".
                             "<td>".$registro['nombres']."</td>".
                             "<td>".$registro['apellidos']."</td>".
                             "<td>".$registro['edad']."</td>".
                             "<td>".$registro['telefono']."</td>".
                             "<td>".$registro['dui']."</td>".
                             "<td>".$registro['email']."</td>".
                             "<td>".$registro['fecha_de_nacimiento']."</td>".
                             "<td><a class='btn red' href='borrar.php/?idusuario=".$registro['idusuario']."'><i class='material-icons'>delete</i></a><a class='btn green' href='formupdate.php/?idusuario=".$registro['idusuario']."'><i class='material-icons'>edit</i></a></td>";
                        echo "</tr>";
                    };
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
   


                       



