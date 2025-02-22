<?php
$grades = [5, 3, 2, 5, 2, 3, 4, 5, 3, 2, 5];
$count = 0;
$sum = 0; 

foreach ($grades as $element) {
    $count++; 
}


for ($i = 0; $i < $count; $i++) {
    $sum += $grades[$i]; 
}

echo $sum / $count;
