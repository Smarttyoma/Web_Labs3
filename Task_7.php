<?php
// Функция, которая печатает строку и возвращает число
function printStringReturnNumber() {
    echo "Это моя строка!\n";  // Печатаем строку
    return 42;                // Возвращаем числовое значение
}

// Вызываем функцию и сохраняем результат в переменную
$my_num = printStringReturnNumber();

// Выводим значение переменной
echo "Возвращенное число: $my_num\n";
?>
