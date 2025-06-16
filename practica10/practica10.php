<?php
$Empleado = $_GET["Empleado"];
$Horas = $_GET["Horas"];
$Categoria = $_GET["Categoria"];



switch($Categoria){
    case "Jefe":
        $Salario_Bruto = $Horas * 450;
        $Descuento = $Salario_Bruto * 25/100;
        $Salario_neto = $Salario_Bruto -$Descuento;
        break;
    case "Administrativo":
        $Salario_Bruto = $Horas * 350;
        $Descuento = $Salario_Bruto * 25/100;
        $Salario_neto = $Salario_Bruto -$Descuento;
        break;
    case "Operador":
        $Salario_Bruto = $Horas * 250;
        $Descuento = $Salario_Bruto * 25/100;
        $Salario_neto = $Salario_Bruto -$Descuento;
        break;
    case "Practicante":
        $Salario_Bruto = $Horas * 150;
        $Descuento = $Salario_Bruto * 25/100;
        $Salario_neto = $Salario_Bruto -$Descuento;
        break;
}


echo "Empleado: ",$Empleado, "<br>", "Horas: ",$Horas, "<br>", "Salario Bruto: ",$Salario_Bruto, "<br>", "Descuento: ", $Descuento, "<br>", "Salario neto: ", $Salario_neto;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practica10.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>