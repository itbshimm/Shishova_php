<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .head {
            text-align: center;
        }

        .title {
            font-size: 30px;
        }

        .head p {
            font-size: 18px;
        }

        table {
            margin: auto;
            border-spacing: 0 15px;
        }
        .bottom{
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="2_2.php" method="post">
        <div class="head">
            <span class="title">
                Дорогие друзья!
            </span>
            <p>
                Никогда не стоит забывть, что периоды плодотворной работы время от времени должны перемежаться периодами не менее плодотвордного отдыха. Пожалуйста заполните нашу анкету. Быть может они поможет Вам настроиться на отпускную волну:-)
            </p>
        </div>
        <table>
            <tr>
                <td>
                    Друзья называют Вас:
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    С кем Вы хотели бы провести отпуск:
                </td>
                <td>
                    <select name="with_whom">
                        <option value="с попугаем">с попугаем</option>
                        <option value="с собакой">с собакой</option>
                        <option value="с свинкой">с свинкой</option>
                        <option value="с кошкой">с кошкой</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Куда бы Вы предпочли отпрвиться в наступающем отпускном сезоне?
                </td>
                <td>
                    <select name="where">
                        <option value="на Кудыкину гору">на Кудыкину гору</option>
                        <option value="на Кавказ">на Кавказ</option>
                        <option value="туда сюда">туда сюда</option>
                        <option value="сюда туда">сюда туда</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Как Вы предполагаете добираться к месту отдыха:
                </td>
                <td>
                    <input type="radio" value="Кривая вывезет" name="how">Кривая вывезет<br>
                    <input type="radio" value="Язык до Киева доведет" name="how">Язык до Киева доведет<br>
                    <input type="radio" value="Мы поедем, мы почтимся, на оленях утром ранним" name="how">Мы поедем, мы почтимся, на оленях утром ранним
                </td>
            </tr>
            <tr>
                <td>
                    Сколько лет вы так чудесно отдыхаете?
                </td>
                <td>
                    <input type="text" name="how_years">
                </td>
            </tr>
            <tr>
                <td>
                    Ваш E-mail адрес:
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="bottom">
                    <button type="submit">Отправить</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>