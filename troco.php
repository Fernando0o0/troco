<?php


function troco($valor){

    $r = [0,0,0,0,0];
$notas = [50,20,10,5,2];

    for($x=0; $x<count($r); $x++){
        $r[$x] = floor($valor / $notas[$x]);
        $valor -= ($r[$x] * $notas[$x]);
    }

    
echo("{$r[0]} .=>. {$notas[0]}"); echo("</br>");
echo("{$r[1]} .=>. {$notas[1]}"); echo("</br>");
echo("{$r[2]} .=>. {$notas[2]}"); echo("</br>");
echo("{$r[3]} .=>. {$notas[3]}"); echo("</br>");
echo("{$r[4]} .=>. {$notas[4]}"); echo("</br>");

    return $r;
}

troco($_POST["numero"]) 
?>