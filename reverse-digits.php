<?php

function reverseDigits($num){
  $result = 0;

  while($num > 0){
    $remainder = $num % 10;
    $result = ($result * 10) + $remainder;
    $num = (int)$num / 10;
  }
  return $result;
} 

$num = 12345;
echo reverseDigits($num);