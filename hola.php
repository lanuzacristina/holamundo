<?php
$saltodelinea = PHP_EOL;
$nom = "Cristina";
$llinage = "Lanuza";
$nom_complet = $nom." ".$llinage;

$msg_edat = "¿Molts anys tens?";

do {    

    $edat = (int) readline($msg_edat);

    $edat_error = $edat == false || $edat > 105 || $edat < 0; 

    if($edat_error) {
        $msg_edat = "¡Anem a vore! Fica be els teus anys: ";
    }

} while ($edat_error);

echo("Hola, soy $nom_complet i tinc $edat anys.$saltodelinea");

if ($edat >= 18) {
    echo("¡Puc comprar alcohol en la discoteca!$saltodelinea");    
} else {
    echo("Si demane alcohol en la discoteca, no me la donen i me muic de ganes i de vergonyeta.$saltodelinea");
}

if ($edat >= 90) {
    echo("Va quedant-me poquet per a la mort.$saltodelinea");
} else {
    echo("¡Olé el bro! ¡Què joveneta que soc!$saltodelinea");
}