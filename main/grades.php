<?php
$grades = [5, 3, 2, 5, 2, 3, 4, 5, 3, 2, 5];

$sum = array_sum($grades);
$count = count($grades);

echo $sum / $count;