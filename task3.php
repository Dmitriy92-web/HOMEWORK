<?php
$a = [
    'Московская область:' =>    ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' =>    ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область:' =>    ['Касимов', 'Кораблино', 'Михайлов', 'Новомичуринск'],
];

foreach($a as $b => $c){
  echo "$b <br>";
  $f = implode(", ", $c);
  echo "$f <br>" ; 
  echo "<hr>";
}


/*Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область
Касимов	1152
2	Кораблино	1965
3	Михайлов	1551
4	Новомичуринск
*/
?>


	
	   

