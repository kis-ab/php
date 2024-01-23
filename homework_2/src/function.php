<?php
// Задание 1
function task1(array $strings, bool $return = true)
{
    $result = implode("\n", array_map(function (string $str){
        return "<p>$str<p>";
    }, $strings));

    if ($return) {
        return $result;
    }

    echo $result;
}


// Задание 2
function task2(string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . ' is not integer or float');
            return 'ERROR: wrong argument';
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('division by zero on argument #' . ($n + 1));
                    return 'ERROR: division by zero';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }

            return $result;

        default:
            return 'ERROR: unknown actions';
    }
}


// Задание 3
function task3($a, $b)
{
    if (!is_int($a)) {
        trigger_error('A is not integer');
        return false;
    }
    if (!is_int($b)) {
        trigger_error('B is not integer');
        return false;
    }

    if ($a < 0 || $b < 0) {
        trigger_error('Arguments must be positive');
    }

    $result = '<table>';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '<td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

// Задание 6
function my_file_get_contents(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }

    echo $str;
}