<?php

function convertDecimalToBinary($num){
  if($num == 0){
    return "0";
  }
  $binary = "";
  $b_len = "";
  $i = 1;

  while($i<=$num){
    $b_len = "0".$b_len;
    $i *= 2;
  }
  for ($j = 0; $j < strlen($b_len); $j++){
    $b_num = 2 ** (strlen($b_len) - 1 - $j);

    if ($num >= $b_num && $num != 0){
      $binary = $binary . "1";
      $num -= $b_num;

    }else{
      $binary = $binary . "0";
    };
  }
  return  $binary;
}


$decimalNumber = 131;
echo convertDecimalToBinary($decimalNumber);