<?php
include "../src/functions.php";

for ($i = 0; $i < 50; $i++) {
    $users[] = createUser();
}



file_put_contents('users.json', json_encode($users));

$data = file_get_contents('users.json');
$decodedUsers = json_decode($data, true);


$names = [];
$sumAge = 0;
for ($i = 0; $i < sizeof($decodedUsers); $i++) {

    if (isset($names[$decodedUsers[$i]['name']])) {

        $names[$decodedUsers[$i]['name']]++;
    } else {
        $names[$decodedUsers[$i]['name']] = 1;
    }

    $sumAge += $decodedUsers[$i]['age'];


}

echo '<b>Количество пользователей с каждым именем в массиве:</b>';
echo '<pre>' . print_r($names, 1) . '</pre>';
echo '<b>Средний возраст: </b>' . ($sumAge/sizeof($decodedUsers));