<?php
$students = [ 
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]], 
];

foreach ($students as $student) {
    $sum = array_sum($student['grades']) / count($student['grades']);

    if ($sum >= 4) {
        $result[] = $student['name'] . ': ' . number_format($sum, 2);
    }
}

echo implode(' ', $result);
