<?php

function explodeString($ip){
    $array = [];
    $sub_string = "";

    for($i = 0; $i < strlen($ip); $i++){
      $char = $ip[i];
      if($char === "."){
        array_push($array, $sub_string);
        $substring = "";
      }else{
        $sub_string = $sub_string . $char;
      }
    }
    if($sub_string != ""){
      array_push($array, $sub_string);
    }
    if(count($array) === 4){
      return $array;
    }else{
      return false;
    }
} 





$ip = "255.255.255.255";
echo validateIpv4();