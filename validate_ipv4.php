<?php

function explodeString($ip){
    $array = [];
    $sub_string = "";

    for($i = 0; $i < strlen($ip); $i++){
      $char = $ip[$i];
      if($char === "."){
        array_push($array, $sub_string);
        $sub_string = "";
      }else{
        $sub_string = $sub_string . $char;
      }
    }
    array_push($array, $sub_string);

    if(count($array) === 4){
      return $array;
    }else{
      return false;
    }
} 

function validateIpv4($ip){
  print_r($ip);
  if($ip){
    for($i = 0; $i < count($ip); $i++){
      if(!ctype_digit($ip[$i]) || $ip[$i] < 0 || $ip[$i] > 255){
        echo "IPv4 is INVALID!";
        return;
      }
    }
  }else{
    echo "IPv4 is INVALID!";
    return;
  }
  return "This IPv4 is VALID!";
}




$ip = "25.55.15.5";
echo validateIpv4(explodeString($ip));