<?php

function readCounter($filename) {
    $counterFile = fopen($filename, "r");
    $counter = fread($counterFile, filesize($filename));
    fclose($counterFile);
    return $counter;
}

function incrementCounter($filename) {
    $counterFile = fopen($filename, "r+");
    $counter = fread($counterFile, filesize($filename));
    $counter++;
    fseek($counterFile, 0);
    fwrite($counterFile, $counter);
    fclose($counterFile);
}

$counterFile = "counter.txt";

if (!file_exists($counterFile)) {
    $counter = 0;
    file_put_contents($counterFile, $counter);
}

incrementCounter($counterFile);
$counterValue = readCounter($counterFile);
echo "You are visitor number: " . $counterValue;
?>