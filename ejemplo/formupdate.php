<?php
    $idusuario = $_REQUEST['idusuario'];
    #conexion a base de datos
    $conexion = mysqli_connect('localhost', 'root', '','tercerodome')
    or die('problemas con la conexion');
    $registro = mysqli_query($conexion, "select idusuario,
                        nombres,
                        apellidos,
                        edad,
                        telefono,
                        dui,
                        email,
                        fecha_de_nacimiento from
                        usuarios where idusuario='$idusuario'") 
                        or die ('error en la consulta' . mysqli_error($conexion)); 
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
            <?php
                if($usuario=mysqli_fetch_array($registro)){
            ?>
            <form action="http://localhost/TERCERO/ejemplo/actualizar.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name='idusuario' value="<?php echo $usuario['idusuario']?>" hidden>
                        <input type="text" name="nombres" id="nombres" value="<?php echo $usuario['nombres']?>" required>
                        <label for="nombres">Nombres</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" name="apellidos" id="apellidos" value="<?php echo $usuario['apellidos']?>" required>
                        <label for="apellidos">Apellidos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="number" name="edad" id="edad" value="<?php echo $usuario['edad']?>" required>
                        <label for="edad">Edad</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="text" name="telefono" id="telefono" value="<?php echo $usuario['telefono']?>" required>
                        <label for="telefono">Telefono</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="text" name="dui" id="dui" value="<?php echo $usuario['dui']?>" required>
                        <label for="dui">DUI</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="email" name="email" id="email" validate value="<?php echo $usuario['email']?>" required>
                            <label for="email">email</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="date" name="fecha_de_nacimiento" value="<?php echo $usuario['fecha_de_nacimiento']?>" required>
                            <label for="fecha">Fecha de nacimiento</label>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Guardar" class="btn indigo">
                        <input type="rest" value="limpiar" class="btn yellow darken-4">
                    </div>
                </div>
            </form>
            <?php
                }else{
                    echo "no existe el registro";
                }  
            ?>
        </div>
    </div>
    </div>
       


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document). ready(function(){
      $('.datepicker').datepicker();
      $('select').formSelect();
        });
    </script>

</body>
</html>