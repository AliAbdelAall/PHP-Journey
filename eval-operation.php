<?php

function validateParatheses($operation) {
  $stack = [];

  for($i = 0; $i < strlen($operation); $i++){
    if ($operation[$i] === "("){
      array_push($stack, "(");

    }elseif($operation[$i] === ")"){

      if($stack) {
        array_pop($stack);
      }else{
        return false;
      }
    }
  }return(!$stack);
}




$operation = "()()()()";
echo validateParatheses($operation);