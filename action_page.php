<?php

require_once "config.php";

$FattoreEta = 0;
$FattoreAltezza = 0;
$FattoreDisclocazioneV = 0;
$FattoreDisclocazioneO = 0;
$FattoreDislocazioneAngolare = 0;
$FattoreGiudizioPresa = 0;

// calcola eta data di nascita
$dataDiNascita = new DateTime($_GET["dataDiNascita"]);
$oggi = new DateTime();
$eta = $oggi->diff($dataDiNascita)->y;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($eta > 18 && $_GET["sesso"] == "M") {
    $FattoreEta = 30;
}
elseif($eta > 18 && $_GET["sesso"] == "F"){
    $FattoreEta = 20;
}
elseif($eta <= 18 && $eta > 15 && $_GET["sesso"] == "M"){
    $FattoreEta = 20;
}
else{
    $FattoreEta = 15;
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_GET["altezzaManiSoll"] > 0 && $_GET["altezzaManiSoll"] < 24) {

    $FattoreAltezza = 0.78;

}
elseif ($_GET["altezzaManiSoll"] > 25 && $_GET["altezzaManiSoll"] < 49) {

    $FattoreAltezza = 0.85;

}
else if ($_GET["altezzaManiSoll"] >= 50 && $_GET["altezzaManiSoll"] < 74) {

    $FattoreAltezza = 0.93;

}
else if ($_GET["altezzaManiSoll"] >= 75 && $_GET["altezzaManiSoll"] < 99) {

    $FattoreAltezza = 1;

}
else if ($_GET["altezzaManiSoll"] >= 100 && $_GET["altezzaManiSoll"] < 124) {

    $FattoreAltezza = 0.93;

}
else if ($_GET["altezzaManiSoll"] >= 125 && $_GET["altezzaManiSoll"] < 149) {

    $FattoreAltezza = 0.85;

}
else if ($_GET["altezzaManiSoll"] >= 150 && $_GET["altezzaManiSoll"] < 174) {

    $FattoreAltezza = 0.78;

}
else {

    $FattoreAltezza = 0;

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_GET["altezzaManiVert"] > 25 && $_GET["altezzaManiVert"] < 29) {

    $FattoreAltezza = 1;

}
elseif ($_GET["altezzaManiVert"] > 30 && $_GET["altezzaManiVert"] < 39) {

    $FattoreAltezza = 0.97;

}
else if ($_GET["altezzaManiVert"] >= 40 && $_GET["altezzaManiVert"] < 49) {

    $FattoreAltezza = 0.93;

}
else if ($_GET["altezzaManiVert"] >= 50 && $_GET["altezzaManiVert"] < 69) {

    $FattoreAltezza = 0.91;

}
else if ($_GET["altezzaManiVert"] >= 70 && $_GET["altezzaManiVert"] < 99) {

    $FattoreAltezza = 0.88;

}
else if ($_GET["altezzaManiVert"] >= 100 && $_GET["altezzaManiVert"] < 169) {

    $FattoreAltezza = 0.87;

}
else if ($_GET["altezzaManiVert"] >= 170 && $_GET["altezzaManiVert"] < 174) {

    $FattoreAltezza = 0.86;

}
else {

    $FattoreAltezza = 0;

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////



















?>

