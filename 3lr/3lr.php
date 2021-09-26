<?php
$friend["Abramov"] = array(
    "surname" => "Абрамов ",
    "height" => "173",
    "age" => "18",
    "avg_score" => "4.2"
);
$friend["Aleksanrovna"] = array(
    "surname" => "Александрова",
    "height" => "160",
    "age" => "17",
    "avg_score" => "3.7"
);
$friend["Alekseev"] = array(
    "surname" => "Алексеев",
    "height" => "167",
    "age" => "16",
    "avg_score" => "4.8"
);
$friend["Andreeva"] = array(
    "surname" => "Андреева",
    "height" => "175",
    "age" => "20",
    "avg_score" => "3.7"
);
$friend["Anisimov"] = array(
    "surname" => "Анисимов",
    "height" => "180",
    "age" => "21",
    "avg_score" => "4.1"
);
$friend["Antonov"] = array(
    "surname" => "Антонов",
    "height" => "159",
    "age" => "20",
    "avg_score" => "4"
);
$friend["Afanac'eva"] = array(
    "surname" => "Афанасьева",
    "height" => "164",
    "age" => "18",
    "avg_score" => "3"
);
$friend["Baranova"] = array(
    "surname" => "Баранова",
    "height" => "165",
    "age" => "17",
    "avg_score" => "4.3"
);
$friend["Belov"] = array(
    "surname" => "Белов",
    "height" => "165",
    "age" => "18",
    "avg_score" => "3.6"
);

$age = array();
foreach ($friend as $key => $mostAge) {
    $age[$key] = $mostAge['age'];
}
array_multisort($age, SORT_DESC, $friend);

echo "<table border=1 align=\"center\"><tr>",
"<th>Фамилия</th>",
"<th>Рост</th>",
"<th>Возраст</th>",
"<th>Средний балл</th>",
"</tr>";

foreach ($friend as $key) {
    echo "<tr>",
    "<td>", $key["surname"], "</td>",
    "<td>", $key["height"], "</td>",
    "<td>", $key["age"], "</td>",
    "<td>", $key["avg_score"], "</td>",
    "</tr>";
}

echo "</table>";
