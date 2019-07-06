<?php
$nom = "Cristina";
$llinage = "Lanuza";
$nom_complet = $nom." ".$llinage;
$saltodelinea = PHP_EOL;
$edat = readline("Introduix la teua edat: ");

echo("Hola, soy $nom_complet i tinc $edat anys.$saltodelinea");

if ($edat ==false || is_float($edat) || $edat > 105 || $edat < 0) {
    
    echo("¡Fica be l'edat, che!$saltodelinea");

} else {    
    
    if ($edat >= 18) {
        echo("¡Puc comprar alcohol en la discoteca!$saltodelinea");    
    } else {
        echo("Si demane alcohol en la discoteca no me la donen i me muic de ganes i de vergonyeta.$saltodelinea");
    }
    
   if ($edat >= 90) {
        echo("Va quedant-me poquet per a la mort.$saltodelinea");
    } else {
        echo("¡Olé el bro! ¡Què joveneta que soc!$saltodelinea");
    } 
}
