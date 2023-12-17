<?php

// Функция для создания таблицы игр
function createGamesTable($gamesArray) {
    $table = "<h2>Каталог игр</h2>";
    $table .= "<table border='1' style='width: 100%;'>
    <tr>
    <th>Название</th>
    <th>Жанр</th>
    <th>Оценка</th>
    <th>Стоимость</th>
    </tr>";

    foreach ($gamesArray as $game) {
        $table .= "<tr>";
        $table .= "<td>" . $game['название'] . "</td>";
        $table .= "<td>" . $game['жанр'] . "</td>";
        $table .= "<td>" . $game['оценка'] . "</td>";
        $table .= "<td>" . $game['стоимость'] . "</td>";
        $table .= "</tr>";
    }

    $table .= "</table>";

    return $table;
}

?>
