<?php

// 1. Функция, которая принимает два числа и проверяет, если их сумма больше 10
function sumGreaterThanTen($num1, $num2) {
    if ($num1 + $num2 > 10) {
        return true;
    } else {
        return false;
    }
}

// Пример использования:
echo sumGreaterThanTen(5, 7) ? 'True' : 'False'; // Вывод: True
echo "\n";

// 2. Функция, которая проверяет, равны ли два числа
function areNumbersEqual($num1, $num2) {
    return $num1 === $num2;
}

// Пример использования:
echo areNumbersEqual(10, 10) ? 'True' : 'False'; // Вывод: True
echo "\n";

// 3. Сокращенная форма if-else
$test = 0;
echo ($test == 0) ? 'верно' : ''; // Вывод: верно
echo "\n";

// 4. Проверка возраста и работа с суммой цифр
$age = 42; // Пример значения

if ($age < 10 || $age > 99) {
    echo "Возраст не в пределах 10-99 лет.\n";
} else {
    $sumOfDigits = array_sum(str_split($age)); // Сумма цифр числа
    if ($sumOfDigits <= 9) {
        echo "Сумма цифр однозначна.\n";
    } else {
        echo "Сумма цифр двузначна.\n";
    }
}

// 5. Проверка количества элементов в массиве
$arr = [1, 2, 3]; // Пример массива

if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr) . "\n"; // Вывод: Сумма элементов массива: 6
}

?>
