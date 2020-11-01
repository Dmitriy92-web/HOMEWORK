<?php
$arg1 = rand(1,10);
$arg2 = rand(1,10);
function sum($arg1,$arg2){
    return ($arg1+$arg2);
}
function minus($arg1,$arg2){
    return ($arg1-$arg2);
}
function proizvedenie($arg1,$arg2){
    return ($arg1*$arg2);
    }
function delenie($arg1,$arg2){
    return ($arg1/$arg2);
    }
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "sum":
        return sum($arg1,$arg2);
        break;
        case "minus":
        return minus($arg1,$arg2);
        break;
        case "proizvedenie":
        return proizvedenie($arg1,$arg2);
        break;
        case "delenie":
        return delenie($arg1,$arg2);
        break;   
    }
}
$a = mathOperation($arg1,$arg2,"sum");
echo "Результат $a <br>";
echo "Значение arg1 -  $arg1 <br>";
echo "Значение arg2 -  $arg2 <br>";
?>