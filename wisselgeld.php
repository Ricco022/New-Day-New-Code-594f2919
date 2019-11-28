<?php

$input = intval($argv[1]);
$eenheden = array(50, 20, 10, 5, 2, 1);
foreach ($eenheden as $waarde) {
    $restgeld = floor($input / $waarde);
    
    if ($restgeld >= 1) {
        $input = $input - ($waarde * $restgeld);
        echo ($restgeld . " x " . $waarde) . PHP_EOL;
    }
}

?>