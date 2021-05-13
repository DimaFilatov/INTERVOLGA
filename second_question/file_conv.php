<?php
header('Content-Type: image/jpeg');

$filename = 'nebula.jpeg';
const IMAGE_WIDTH = 200;
const IMAGE_HEIGHT = 100;

//Получаем размер картинки
list($width, $height) = getimagesize($filename);

//Определяем во сколько раз нужно уменьшить каждую сторону
//и уменьшаем все стороны под самую сжимаемую
$reduce_width = $width / IMAGE_WIDTH;
$reduce_height = $height / IMAGE_HEIGHT;

if($reduce_width < $reduce_height){
	$new_width = $width / $reduce_height;
	$new_height = $height / $reduce_height;
}
else{
	$new_width = $width / $reduce_width;
	$new_height = $height / $reduce_width;
}

// ресэмплирование
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// вывод
imagejpeg($image_p, null, 100);
