<?php
$counterFile = 'counter.txt';

// Odczytaj wartość z pliku
$counterValue = file_get_contents($counterFile);

// Inkrementuj wartość
$counterValue++;
file_put_contents($counterFile, $counterValue);

// Zwróć wartość do wyświetlenia na stronie
echo $counterValue;
?>
