<?php
// Количество выученных языков
$numLanguages = 4;

// Количество месяцев, потраченных на обучение
$months = 11;

// Количество дней учебы
$days = $months * 16;

// Среднее количество дней на один язык
$daysPerLanguage = $days / $numLanguages;

// Выводим результат
echo $daysPerLanguage;
?>
