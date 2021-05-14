<?php
//input
echo stringreverse("emocleW ot PHP");
//funtion for string revers
function stringreverse($data) {
    //function
    $streverse = strrev($data); //revers the string
    $stsplit = explode(" ", $streverse); //split the text into array
    //output
    $stresult = "";
    $stlength = count($stsplit); //take numbers of the array
    //loop
    for($i = $stlength - 1; $i >= 0; $i--) {
        $stresult = $stresult . $stsplit[$i];
        if ($i != 0) {
            $stresult = $stresult . " ";
        }
    }
    //push back result
    return $stresult;
}
?>