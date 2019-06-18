<?php
$nom = "Cristina";
$llinage = "Lanuza";
$edat = 23;
$nom_complet = $nom." ".$llinage;

echo("Hola, soc $nom_complet i tinc $edat anys.");
echo("<br>");
if ($edat >= 18) {
    echo("¡Puc comprar alcohol en la discoteca!");
} else {
    echo("Si dema alcohol en la discoteca no me la donen i me muic de ganes i de vergonyeta.");
}
echo("<br>");
if ($edat == true) {
    echo("Pot ser que tinga eixa edat, sí.");
} else {
    echo("Eixa edat no existix, primo.");
}
echo("<br>");
if ($edat >= 90) {
    echo("Va quedant-me poquet per a la mort.");
} else {
    echo("¡Olé el bro lo joveneta que soc!");
}
    