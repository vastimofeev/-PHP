<?php
//Задание 1
$a = 0;
while ($a <= 100) {
  if (($a % 3) == 0) {
    echo $a . " ";
  }
  $a++;
}

echo "<br />";
echo "<br />";

//Задание 2
function chisla() {
  echo "0 - ноль.<br />";
  $a = 1;
  do {
    if (($a % 2) == 0) {
      echo $a . " - четное число.<br />";
    } else {
      echo $a . " - нечетное число.<br />";
    }
    $a++;
  } while ($a <= 10);
}

chisla();

echo "<br />";
echo "<br />";

//Задание 3
$region["Московская область"] = array("Москва", "Зеленоград", "Клин");
$region["Ленинградская область"] = array("Санкт-Петербург", "Павловск", "Кронштадт");
$region["Рязанская область"] = array("Рязань", "Шилово", "Рыбное");

foreach ($region as $key => $value) {
  echo $key . ": <br>";
  foreach ($value as $city) {
    echo $city . " ";
  }
  echo "<br />";
}

echo "<br />";
echo "<br />";

//Задание 4
function trans($input) {
  $abc = array('а' => 'a',
               'б' => 'b',
               'в' => 'v',
               'г' => 'g',
               'д' => 'd',
               'е' => 'e',
               'ё' => 'yo',
               'ж' => 'j',
               'з' => 'z',
               'и' => 'i',
               'й' => 'i',
               'к' => 'k',
               'л' => 'l',
               'м' => 'm',
               'н' => 'n',
               'о' => 'o',
               'п' => 'p',
               'р' => 'r',
               'с' => 's',
               'т' => 't',
               'у' => 'u',
               'ф' => 'f',
               'х' => 'h',
               'ц' => 'c',
               'ч' => 'ch',
               'ш' => 'sh',
               'щ' => 'sch',
               'ъ' => '',
               'ы' => 'i',
               'ь' => '',
               'э' => 'e',
               'ю' => 'yu',
               'я' => 'ya');
  $input = mb_strtolower($input);
  for ($i=0; $i < mb_strlen($input); $i++) {
    $old = mb_substr($input, $i, 1);
    $isold = 0;
    foreach ($abc as $key => $value) {
      if ($key === $old) {
        $isold = 1;
      }
    }
    if ($isold == 1) {
      $input = str_replace($old, $abc[$old], $input);
    }
  }
$input = str_replace(" ", "_", $input); // Для задания 9
echo $input;
}

trans("Папа гнал по трассе");

echo "<br />";
echo "<br />";

//Задание 5
function chertochka($input) {
    $input = str_replace(" ", "_", $input);
    echo $input;
}

chertochka("Папа гнал по трассе");

echo "<br />";
echo "<br />";

//Задание 7
for ($i = 0; $i < 10; print($i++)) {

}

echo "<br />";
echo "<br />";

//Задание 8
$region["Московская область"] = array("Москва", "Зеленоград", "Клин");
$region["Ленинградская область"] = array("Санкт-Петербург", "Павловск", "Кронштадт");
$region["Рязанская область"] = array("Рязань", "Шилово", "Рыбное");

foreach ($region as $key => $value) {
  echo $key . ": <br>";
  foreach ($value as $city) {
    $isK = mb_substr($city, 0, 1);
    $isK = mb_strtolower($isK);
    if ($isK == "к") {
      echo $city . " ";
    }
  }
  echo "<br />";
}

 ?>
