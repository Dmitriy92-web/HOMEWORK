<?php
function power($val, $pow){
    if($pow <=15){
        echo pow($val,$pow). "<br>";
        return power($val, $pow+1);
    }
}
echo power(2,2);
?>
    

	
	   

