<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Интерволга задание №4</title>
</head>
<body>
<?php
$arr_of_numbers = array(1, 1, 2, 3, 4 -51, 12, 12, 12, -51);
//4, 4, 3, 5, 5, 6, 7, 7, 7, 7, 7, 8
$previous_value = null;
$first_pair = false;
$count_pair = 0;
/*
 * В цикле проходим по всем значениям и сравниваем значения из предыдущего и текущего цикла.
 * Если значения равны тогда считаем, что нашли совпадение.
 * $first_pair защищает от ложных подсчетов при длинной цепочке совпадений.
 * Предполагаем, что в массиве только числа
 */
foreach ($arr_of_numbers as $item){
	if ($item === $previous_value){

		if($first_pair === true){
			continue;
		}

		$previous_value = $item;
		$first_pair = true;
		$count_pair++;
	}
	else{
		$previous_value = $item;
		$first_pair = false;
	}
}

$ending = "";
if($count_pair == 1) $ending = "а";
if($count_pair >= 2 && $count_pair <= 4) $ending = "ы";

echo "<p>В массиве содержится $count_pair пар$ending</p>";
?>
</body>
</html>
