<?php
include 'display_games.php';
include 'create_games_table.php';

// Выводим таблицу игр
echo createGamesTable($games);
?>
