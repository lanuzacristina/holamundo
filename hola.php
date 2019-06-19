<?php
$nom = "Cristina";
$llinage = "Lanuza";
$edat = 23;
$nom_complet = $nom." ".$llinage;

echo("Hola, soc $nom_complet i tinc $edat anys.<br>");

if ($edat ==false || is_float($edat) || $edat > 105 || $edat < 0) {
    
    echo("¡Fica be l'edat, che!<br>");

} else {    
    
    if ($edat >= 18) {
        echo("¡Puc comprar alcohol en la discoteca!<br>");    
    } else {
        echo("Si demane alcohol en la discoteca no me la donen i me muic de ganes i de vergonyeta.<br>");
    }
    
   if ($edat >= 90) {
        echo("Va quedant-me poquet per a la mort.<br>");
    } else {
        echo("¡Olé el bro lo joveneta que soc!<br>");
    } 
}
