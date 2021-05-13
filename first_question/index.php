<?php
/*
 * Возможные проблемы:
 * Хоть в скрипте и используется mb_substr
 * (функция с поддержкой многобайтной кодировки), однако я предполагаю,
 * что могут возникнуть проблемы с азиатскими языками.
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интерволга задание №1</title>
</head>
<body>
<?php
//Текст 200 символов
$a = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu";
$link = "full_news.php";

echo "<p>Не сокращенный текст (отображаю для наглядности)</p>";
echo $a."</br>";
$words = [];

//Обрезаю до 180 символов и разбиваю строку на массив слов
foreach ( mb_split( '[ ]', mb_substr($a, 0, 180) ) as $item) {
    $words[] = $item;
}

$count_words = count($words);
$final_string = "";

//Формирую строку длинной -2 слова
for ($i = 0; $i < $count_words - 2; $i++){
    $final_string.= $words[$i]." ";
}

echo "<p>Сокращенный текст с ссылкой на полный текст статьи</p>";
$final_link = "<a href=$link>" . $words[$count_words -2]. " " . $words[$count_words-1] . "...</a>";
echo $final_string . $final_link;
?>
</body>
</html>

