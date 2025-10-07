<?php
// ✏️ EXERCICI 24
// Programa que demana un dia de la setmana i mostra l'assignatura de primera hora

// Demanem el dia (pots provar amb: dilluns, dimarts, dimecres, dijous o divendres)
$dia = strtolower(readline("Introdueix un dia de la setmana: ")); // passem a minúscules

switch ($dia) {
    case "dilluns":
        echo "A primera hora tens Programació.";
        break;
    case "dimarts":
        echo "A primera hora tens Base de Dades.";
        break;
    case "dimecres":
        echo "A primera hora tens Sistemes Informàtics.";
        break;
    case "dijous":
        echo "A primera hora tens Llenguatges de marques.";
        break;
    case "divendres":
        echo "A primera hora tens Entorns de Desenvolupament.";
        break;
    default:
        echo "El dia introduït no és vàlid. Escriu un dia de dilluns a divendres.";
}
?>
