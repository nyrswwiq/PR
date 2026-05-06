<?php

$input_lines = [
    "Бeдa.",
    "Плохо.",
    "Кажется, что вы где-то учились",
    "Вы среднестический человек.",
    "Нормально.",
    "Хорошо.",
    "Отлично."
];

$poem = "Мой дядя самых честных правил,
Когда не в шутку занемог,
Он уважать себя заставил
И лучше выдумать не мог.
Его пример другим наука;
Но, боже мой, какая скука
С больным сидеть и день и ночь,
Не отходя ни шагу прочь!
Какое низкое коварство!
Полуживого забавлять,
Ему подушки поправлять,
Печально подносить лекарство,
Вздыхать и думать про себя:
Когда же черт возьмет тебя!";

$poem_lines = explode("\n", $poem);

$poem_lines = array_filter($poem_lines);

$input_data = count($input_lines);

echo "Входные данные - количество влюбленных строк: " . $input_data . "<br>";

echo "Выходные данные - предложенный текст:<br>";

switch ($input_data) {
    case 2:
        echo "Текст: " . $input_lines[0] . "<br>";
        break;
    case 4:
        echo "Текст: " . $input_lines[1] . "<br>";
        break;
    case 6:
        echo "Текст: " . $input_lines[2] . "<br>";
        break;
    case 8:
        echo "Текст: " . $input_lines[3] . "<br>";
        break;
    case 10:
        echo "Текст: " . $input_lines[4] . "<br>";
        break;
    case 12:
        echo "Текст: " . $input_lines[5] . "<br>";
        break;
    case 14:
        echo "Текст: " . $input_lines[6] . "<br>";
        break;
    default:
        echo "Введены некорректные данные. Пожалуйста, введите количество строк от 2 до 14 с шагом 2.<br>";
        break;
}

echo "<br>";

if ($input_data >= 2) {
    echo "А.С. Пушкин \"<br>";
    foreach ($poem_lines as $line) {
        echo htmlspecialchars($line) . "<br>";
    }
}

?>
