<?php
    $hijos = $_POST["hijos"];
    $importe = $_POST["importe"];
    $comision = $importe*0.075;
    $bonificacion = $hijos * 50;
    $sueldo_basico = 600;
    $sueldo_bruto= $sueldo_basico + $comision +$bonificacion;
    $descuento = $sueldo_bruto*0.11;
    $sueldo_neto = $sueldo_bruto-($descuento);
    echo "Su comisión es de S/.".$comision. "<br>";
    echo "Su bonificación familiar es de: S/.".$bonificacion. "<br>";
    echo "Su sueldo bruto es de S/." .$sueldo_bruto. " aplicando un descuento del S/.".$descuento." <br>";
    echo "SUELDO NETO: S/.".$sueldo_neto;
?> 