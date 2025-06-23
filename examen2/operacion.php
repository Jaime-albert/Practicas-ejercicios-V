<?php 
// Validar que los datos se reciban por el método GET
$nombre = $_GET['nombre'];
$genero = $_GET['genero'];
$materia = $_GET['materia'];
$cal1 =$_GET['cal1'];
$cal2 =$_GET['cal2'];
$cal3 =$_GET['cal3'];

$calt = ($cal1 + $cal2 + $cal3 )/3;// Calificacion total

if($calt <= 69){// Si la calificacion es menor o igual a 69
    $R = "Reprobado";
}else{
    if($calt >= 70 or $calt <= 95 ){// Si la calificacion es mayor o igual a 70 y menor o igual a 95
        $R = "Ordinario";
    }else{// Si la calificacion es mayor a 95
        $R= "Exento";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body style="text-align: center; color: aqua;" >

    <h1> Nombre del alumno ....<?php echo $nombre?></h1><br><br>

    <h4>Genero....<?php echo $genero?></h4><br>

    <h4>Materia....<?php echo $materia?></h4><br>

    <h4>Calificacion.... <?php echo $calt?></h4><br>

    <h4>Estado.....<?php echo $R?></h4>

</body>
</html>