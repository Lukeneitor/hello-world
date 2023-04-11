<?php
    $datos=array ();
    $datos[0]='solo';
    $datos[1]='false';
    $datos[2]='243.1';
    $datos[3]='8569';
    $datos[4]='Ricardo';
    print_r($datos);
    echo"Los datos del array son:"."<br>";
    for($a=0;$a<5;$a++) {
        echo $datos[$a]."<br>";
    }
    unset($datos[2]);
    print_r($datos);
    sort($datos);
    print_r($datos);
        $tam=count($datos);
        echo $tam;
?>

