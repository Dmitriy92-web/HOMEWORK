<?php
$i = 0;
do{
    if($i == 0){
        echo "$i - ноль <br>";
        $i++;
    }elseif($i % 2 == 0){
        echo "$i - четное число <br>";
        $i++;
    }else{
        echo "$i - нечетное число <br>";
        $i++;
    }
} while ($i <= 10);

for ($i=0; $i <= 10; $i++ ){
    if($i == 0){
        echo "$i - ноль <br>";
    }elseif($i % 2 == 0){
        echo "$i - четное число <br>";
    }else{
        echo "$i - нечетное число <br>";
    } 
}
?>


	
	   

