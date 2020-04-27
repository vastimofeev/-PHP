<?php
//Задание 1
$a = -16;
$b = -3;
if (($a >= 0) && ($b >= 0)) {
  $c = $a - $b;
  echo ("Разность = $c");
} elseif (($a >= 0) || ($b >= 0)) {
  $c = $a + $b;
  echo ("Сумма = $c");
} else {
  $c = $a * $b;
  echo ("Произведение = $c");
}

echo ("<br>");
echo ("<br>");
//Задание 2

$a = 0;


 switch ($a) {

   case 0 :
   echo ("0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 1 :
   echo ("1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 2 :
   echo ("2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 3 :
   echo ("3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 4 :
   echo ("4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 5 :
   echo ("5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 6 :
   echo ("6, 7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 7 :
   echo ("7, 8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 8 :
   echo ("8, 9, 10, 11, 12, 13, 14, 15");
   break;

   case 9 :
   echo ("9, 10, 11, 12, 13, 14, 15");
   break;

   case 10 :
   echo ("10, 11, 12, 13, 14, 15");
   break;

   case 11 :
   echo ("11, 12, 13, 14, 15");
   break;

   case 12 :
   echo ("12, 13, 14, 15");
   break;

   case 13 :
   echo ("13, 14, 15");
   break;

   case 14 :
   echo ("14, 15");
   break;

   case 15 :
   echo ("15");
   break;

 }

 echo ("<br>");
 echo ("<br>");

 //Задание 3
 function summary($a, $b) {
   $result = $a + $b;
   return $result;
 }

 function difference($a, $b) {
   $result = $a + $b;
   return $result;
 }

 function multiplicate($a, $b) {
   $result = $a + $b;
   return $result;
 }

 function divide($a, $b) {
   $result = $a + $b;
   return $result;
 }

//Задание 4
function mathOperation($a, $b, $operation) {
  switch ($operation) {
    case "summ":
      $result = summ($a,$b);
      return $result;
      break;

    case "diff":
      $result = diff(a,b);
      return $result;
      break;

    case "multi":
      $result = multi(a,b);
      return $result;
      break;

    case "div":
      $result = div(a,b);
      return $result;
      break;
  }
}
?>
