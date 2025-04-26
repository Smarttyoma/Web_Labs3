<?php
// Функция: добавляет восклицательный знак к строке
function increaseEnthusiasm($str) {
    return $str . "!";
}

// Пример использования:
echo increaseEnthusiasm("Привет") . "\n";

// Функция: повторяет строку три раза
function repeatThreeTimes($str) {
    return $str . $str . $str;
}

// Пример использования:
echo repeatThreeTimes("Ура") . "\n";

// Комбинированный вызов:
echo increaseEnthusiasm(repeatThreeTimes("Салют")) . "\n";

// Функция: обрезает строку до заданного количества символов
function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

// Пример использования:
echo cut("Это какая-то длинная строка", 5) . "\n"; // вывод: "Это "

// Вывод элементов массива с помощью рекурсии:
function printArrayRecursively($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . "\n";
        printArrayRecursively($arr, $index + 1);
    }
}

// Пример массива:
$array = [1, 2, 3, 4, 5];
printArrayRecursively($array);

// Функция: сложение цифр числа до однозначного результата
function sumDigits($num) {
    $sum = array_sum(str_split($num));
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

// Пример использования:
echo sumDigits(9875) . "\n"; // 9+8+7+5 = 29, 2+9=11, 1+1=2
?>
