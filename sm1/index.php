<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- 1 задание -->
    <div class="container_zd1">
    <h2 class="zd_title">1 задание</h2>

    <?php
// Создаем массив со списком студентов
$students = ["Иванов", "Петров", "Сидоров", "Козлов", "Смирнов"];

// Выводим список студентов на экран
echo "Список студентов:<br>";
foreach ($students as $student) {
    echo $student . "<br>";
}

// Посчитываем количество студентов
$num_students = count($students);
echo "Количество студентов: " . $num_students . "<br>";

// Проверяем, есть ли "Сидоров" в списке
if (in_array("Сидоров", $students)) {
    echo "Студент с фамилией 'Сидоров' есть в списке.<br>";
} else {
    echo "Студент с фамилией 'Сидоров' отсутствует в списке.<br>";
}

// Удаляем последнюю фамилию из списка и сохраняем ее в переменной $expelled
$expelled = array_pop($students);
echo "Фамилия последнего отчисленного студента: " . $expelled . "<br>";
?>

    </div>
    

<div class="container_zd2">
    <!-- 2 задние -->
<h2 class="zd_title">2 задание</h2>
<?php
    
    // Создаем массив с данными
    $students = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];
    
    // Сортируем массив по фамилиям (значениям)
    asort($students);
    
    // Выводим отсортированный список в формате Кружок - Фамилия
    foreach ($students as $circle => $surname) {
        echo "$circle - $surname<br>";
    }
    
?>
</div>

<div class="container_zd3">
    <!-- 3 задание -->
<h2 class="zd_title">3 задание</h2>
<?php
    
    // Создаем многомерный массив student
    $student = [
        "Имя" => "Аджара",
        "Фамилия" => "Гуджу",
        "Группа" => "425",
        "Хобби" => "Гомать в комп ",
        "Соцсети" => [
            "Facebook" => "ggggggg",
            "Twitter" => "ggggggg",
            "Instagram" => "ggggggg"
        ]
    ];
    
    // Выводим информацию о студенте
    echo "Информация о студенте:<br>";
    echo "Имя: " . $student["Имя"] . "<br>";
    echo "Фамилия: " . $student["Фамилия"] . "<br><br>";
    echo "Группа: " . $student["Группа"] . "<br><br>";
    echo "Хобби: " . $student["Хобби"] . "<br><br>";
    echo "Социальные сети:<br>";
    foreach ($student["Соцсети"] as $network => $username) {
        echo "$network: $username<br>";
    }
?>
</div>


</body>
</html>