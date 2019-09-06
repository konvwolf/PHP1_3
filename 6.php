<?php

/* В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое
через PHP. Необходимо представить пункты меню как элементы массива и вывести их
циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать
его реализовать */

const REGIONS = [
    'Московская область' => [
        'Москва', 'Зеленоград', 'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'
    ],
    'Рязанская область' => [
        'Рязань', 'Скопин', 'Пронск', 'Новомичуринск'
    ],
    'Владимирская область' => [
        'Владимир', 'Киржач', 'Покров'
    ],
    'Тульская область' => [
        'Тула', 'Венев', 'Алексин'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cities</title>
    <style type="text/css">
        * {
            padding-top: .5%;
            margin: 0;
        }
        .nav {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;"
        }
    </style>
</head>
<body>
    <nav class="nav">
        <?php foreach (REGIONS as $region => $cities): ?>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $region ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php foreach ($cities as $city): ?>
                    <a class="dropdown-item" href="#">
                        <?= $city ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>