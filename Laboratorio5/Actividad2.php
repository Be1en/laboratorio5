<!DOCTYPE html>
<html lang="en">
<head>
    <title>Analizar, Diseñar, Desarrollar</title>
</head>
<body>
    <form method="post" action="">
    
    Precio Actual:<br> <input type="text" id= "hijos" name="precio_actual"></br>
    
    Cantidad de Unidades: <br> <input type="text" name="cantidad"></br><br>

    <input type="submit" name="producto" value="Calcular">
    <input type="reset" name="Cancelar" value="Cancelar">
    </form>
<?php
    $precio_act = $_POST["precio_actual"];
    $cantidad= $_POST["cantidad"];
    $descuento = round($precio_act*0.05,1);
    $precio_nuevo = $precio_act - $descuento;
    $total = round($precio_nuevo*$cantidad,1);
    $descuento_total = round($total*0.07,1);
    $pagar = round($total - $descuento_total,1);
    $obsequio = $cantidad*2;
    echo "Su total a pagar por la adquisión de ".$cantidad. " gaseosa(s) es de: S/.".$total. "<br>";
    echo "Se le aplicara un descuento de S/.".$descuento_total."<br>";
    echo "Su nuevo total a pagar es S/.".$pagar. " se le brindara como obsequio de su compra ".$obsequio. " caramelo(s).";
?>
</body>
</html>