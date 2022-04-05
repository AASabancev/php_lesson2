<?php

/**
 * Задание 1
 * @param array $rows
 * @param bool|null $return
 * @return string|void
 */
function task1(array $rows, bool $return = null)
{
    if (empty($rows)) {
        echo "Вводные данные отсутствуют";
        return;
    }

    if ($return) {
        return join(' ', $rows);
    }

    foreach ($rows as $row) {
        echo "<p>" . $row . "</p>";
    }
}

/**
 * Задание 2
 * @param string $action Действие, может принимать значения: сложение (+), вычитание (-), умножение (*), деление (/)
 * @param int|float ...$args Числа, с которыми необходимо выполнить действие $action
 */
function task2(string $action, ...$args)
{
    if (empty($args)) {
        echo "Аргументы не указаны";
        return;
    }

    echo "Результат: ";
    echo join(" " . $action . " ", $args);
    echo " = ";
    switch ($action) {
        case "+":
            echo array_sum($args);
            break;
        case "-":
            $itog = array_shift($args);
            foreach ($args as $arg) {
                $itog -= $arg;
            }
            echo $itog;
            break;
        case "*":
            $itog = array_shift($args);
            foreach ($args as $arg) {
                $itog *= $arg;
            }
            echo $itog;
            break;
        case "/":
            $itog = array_shift($args);
            foreach ($args as $arg) {
                $itog /= $arg;
            }
            echo $itog;
            break;
    }
}

/**
 * Задание 3
 */
function task3($max_x, $max_y)
{
    $errors = [];
    if (!is_int($max_x)) {
        $errors[] = "Первый параметр должен быть целым числом";
    }
    if (!is_int($max_y)) {
        $errors[] = "Второй параметр должен быть целым числом";
    }

    if (!empty($errors)) {
        echo "Ошибка!<br>";
        echo join('<br>', $errors);
        return;
    }

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($x = 1; $x < $max_x; $x++) {
        echo "<tr>";
        for ($y = 1; $y < $max_y; $y++) {
            echo "<td align='center'>" . ($x * $y) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
