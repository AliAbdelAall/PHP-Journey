<?php

function filterNumbers($str){
  $num = 0;
  $inserted = true;
  $array = [];
  $prev_num = false;
  for($i = 0; $i < strlen($str); $i++){
    $char = $str[$i];
    if(ctype_digit($char)){
      if($prev_num){
        $num = $num * 10 + intval($char);
        $inserted = false;
      }else{
        $num = intval($char);
        $prev_num = true;
        $inserted = false;
      }
    }
    if((!$inserted  && !ctype_digit($char)) || $i === strlen($str) - 1){
      array_push($array, $num);
      $num = 0;
      $inserted = true;
      $prev_num = false;
    }
  }
  return $array;
}

$string = "hpd12aq3@8w$5";
print_r(filterNumbers($string));