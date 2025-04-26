<?php

// 1. Заполнение массива 'x', 'xx', 'xxx' и так далее
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
print_r($array); // Вывод: ['x', 'xx', 'xxx', 'xxxx', 'xxxxx']

// 2. Функция arrayFill
function arrayFill($value, $count) {
    $array = [];
    for ($i = 0; $i < $count; $i++) {
        $array[] = str_repeat($value, $i + 1);
    }
    return $array;
}
print_r(arrayFill('x', 5)); // Вывод: ['x', 'xx', 'xxx', 'xxxx', 'xxxxx']

// 3. Сумма элементов двухмерного массива
$multiArray = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($multiArray as $subArray) {
    $sum += array_sum($subArray);
}
echo "Сумма элементов массива: $sum\n"; // Вывод: Сумма элементов массива: 21

// 4. Создание массива с использованием двух циклов
$matrix = [];
for ($i = 1; $i <= 3; $i++) {
    $subArray = [];
    for ($j = 1; $j <= 3; $j++) {
        $subArray[] = ($i - 1) * 3 + $j;
    }
    $matrix[] = $subArray;
}
print_r($matrix); // Вывод: [[1, 2, 3], [4, 5, 6], [7, 8, 9]]

// 5. Умножение элементов массива и суммирование
$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo "Результат: $result\n"; // Вывод: Результат: 47

// 6. Массив с личной информацией
$user = [
    'name' => 'Иван',
    'surname' => 'Иванов',
    'patronymic' => 'Иванович'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "\n"; // Вывод: Иванов Иван Иванович

// 7. Массив с текущей датой
$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "\n"; // Вывод: 2025-04-26 (в зависимости от текущей даты)

// 8. Количество элементов в массиве
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов в массиве: " . count($arr) . "\n"; // Вывод: Количество элементов в массиве: 5

// 9. Последний и предпоследний элементы массива
echo "Последний элемент массива: " . end($arr) . "\n"; // Вывод: Последний элемент массива: e
echo "Предпоследний элемент массива: " . prev($arr) . "\n"; // Вывод: Предпоследний элемент массива: d

?>
