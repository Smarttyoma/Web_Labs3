<?php

// Задача 1: Среднее арифметическое элементов массива
$array = [1, 2, 3, 4, 5];
$average = array_sum($array) / count($array);
echo "Среднее арифметическое: " . $average . "\n"; // Вывод: 3


// Задача 2: Сумма чисел от 1 до 100
$sum = (100 * (1 + 100)) / 2;
echo "Сумма чисел от 1 до 100: " . $sum . "\n"; // Вывод: 5050


// Задача 3: Массив с квадратными корнями чисел
$array = [1, 4, 9, 16, 25];
$squareRoots = array_map('sqrt', $array);
echo "Квадратные корни чисел: ";
print_r($squareRoots); // Вывод: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


// Задача 4: Массив с числами от 1 до 26, где ключами являются буквы алфавита
$letters = range('a', 'z');
$alphabetArray = array_combine($letters, range(1, 26));
echo "Массив с числами от 1 до 26 с буквами как ключами:\n";
print_r($alphabetArray);
// Вывод: Array ( [a] => 1 [b] => 2 [c] => 3 ... [z] => 26 )


// Задача 5: Сумма пар чисел из строки '1234567890'
$string = '1234567890';
$numbers = str_split($string, 2);
$sumPairs = array_sum(array_map('intval', $numbers));
echo "Сумма пар чисел: " . $sumPairs . "\n"; // Вывод: 270

?>
