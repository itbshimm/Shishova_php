<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<CENTER><FONT size=10>Получены данные:</FONT></CENTER><BR><BR><BR><BR>";
    echo "<table style=\"margin:auto;\" border=1>";
    echo "<tr><td>Как называют:<td>", $_POST["name"],"</td></tr>";
    echo "<tr><td>С кем Вы хотели бы провести отпуск:<td>", $_POST["with_whom"],"</td></tr>";
    echo "<tr><td>Куда бы Вы предпочли отпрвиться в наступающем отпускном сезоне?<td>", $_POST["where"],"</td></tr>";
    echo "<tr><td>Как Вы предполагаете добираться к месту отдыха:<td>", $_POST["how"],"</td></tr>";
    echo "<tr><td>Сколько лет вы так чудесно отдыхаете?<td>", $_POST["how_years"],"</td></tr>";
    echo "<tr><td>Ваш E-mail адрес:<td>", $_POST["email"],"</td></tr>";
    echo "</table>";
    ?>
</body>

</html>