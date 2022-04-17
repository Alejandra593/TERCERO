t<?php
$alumnos = array('Juan Perez','Maria Castro','Lucas Flores');
$secciones = array('Primero Software','segundo software','tercero software');
$a=0;
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
    <nav class="blue darken-4"></nav>
    <div class="container">
        <div class="row">
            <table>
            <thead>
                <th>No</th>
                <th>Alumnos</th>
                <th>Seccion</th>
           </thead>
           <tbody>
               <?php
               for ($i=0; $i < count($alumnos); $i++) { 
                   echo "<tr>";
                   echo "<td>".($a=$a+1)."</td>"."<td>".$alumnos[$i]."</td>"."<td>".$secciones[$i]."</td>";
                   echo "</tr>";
               }
               ?>
        </tbody>
    </table>
    <br>
    <label for="">Seleccione un estudiante</label>
    <select name="" id="">
    <?php
    for ($i=0; $i < count($alumnos) ; $i++) { 
       echo "<option>";
       echo $alumnos[$i];
       echo "</option>";
    }

?>
    </select>
    <br>
    <label for="">Seleccione un seccion</label>
    <select name="" id="">
    <?php
    for ($i=0; $i < count($secciones) ; $i++) { 
       echo "<option>";
       echo $secciones[$i];
       echo "</option>";
    }

?>
    </select>

            
        
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