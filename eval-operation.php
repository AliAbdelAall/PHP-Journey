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


function evaluateOperation($operation){
  $valid = validateParatheses($operation);
  $length = strlen($operation);
  $num = 0;
  $result = 0;
  $operator = '';
  $first_op = true;
  $previous_num = false;
  if($valid){
    for($i = 0; $i < $length; $i++){
      $char = $operation[$i];
      if($char != "" && $char != "(" && $char != ")"){
        if(ctype_digit($char)){

          if($previous_num){
            $num = $num * 10 + intval($char);
          }else{
            $num = intval($char);
            $previous_num = true;;
          }
        }else {
          $operator = $operation[$i];
          
        }
        if(!$operator && $first_op){
          $result += $num;
        }else{
          if (($operator !== '' && $num != 0) || $i === $length - 1)  {
            switch($operator) {
              case "+":
                $result += $num;
                break;
              case "-":
                $result -= $num;
                break;
              case "*":
                $result *= $num;
                break;
              case "/":
                $result /= $num;
                break;
              } 
            }
          }
        $num = 0;
        $previous_num = true;
      } 
    }
  }else{
    echo "INVALID Operation";
  }
  return $result;
}

$operation = "(5+4-3*3/2)";
echo evaluateOperation($operation);
