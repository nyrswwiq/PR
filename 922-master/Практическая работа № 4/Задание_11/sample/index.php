<?php

require_once 'personnels.php';

$term = "surname";     
$value = "Маркова";    

echo "<h1>Результаты поиска по фамилии: {$value}</h1>";
echo "<hr>";

foreach ($content as $item) {
    
    if (isset($item[$term]) && $item[$term] == $value) {
        
        echo "id: " . $item['id'] . " <br /> // id_personnel\n";
        echo "Фамилия: " . $item['surname'] . " <br /> // surname\n";
        echo "Имя: " . $item['name'] . " <br /> // name\n";
        echo "Отчество: " . $item['patronymic'] . " <br /> // patronymic\n";
        echo "Должность: " . $item['post'] . " <br /> // post\n";
        echo "Категория: " . $item['category'] . " <br /> // category\n";
        echo "Образование: " . $item['level_edu'] . " <br /> // level_edu\n";
        echo "Стаж работы в ОУ: " . $item['experience_total'] . " <br /> // experience_total\n";
        echo "<br />\n"; 
    }
}

?>
