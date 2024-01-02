<?php

function calculadora($valor1,$valor2,$op){
  switch ($op){
    case "+":
      $resultado = $valor1 + $valor2;
      echo "El resultado de la suma es: ".$resultado;
      break;
    case "-":
      $resultado = $valor1 - $valor2;
      echo "El resultado de la resta es: ".$resultado;
      break;
    case "*":
      $resultado = $valor1 * $valor2;
      echo "El resultado de la multiplicación es: ".$resultado;
      break;
    case "/":
      $resultado = $valor1 / $valor2;
      echo "El resultado de la division es: ".$resultado;
      break;
    default:
    echo "Operación no válida";
    break;
  }
}

$valor1 = readline( "Digite el primer valor: ");
$valor2 = readline( "Digite el segundo valor: ");
$op = readline("Seleccione +, -, *, /: ");

calculadora($valor1, $valor2, $op);
?>
