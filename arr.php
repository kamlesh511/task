<?php
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");
$operator = readline("Enter the operator: +,-,*,/: ");
switch($operator)
    {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            echo $num1 / $num2;
        default:
            echo "None!!";
    

    }
    
?>