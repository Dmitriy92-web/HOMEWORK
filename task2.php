
<form style= "display:flex;" action="index.php" method ="post">
<p>Значение 1 </p>
   <input type="text" name= "znachenie1">
   <p>Значение 2</p>
   <input type="text" name= "znachenie2">
   <p>Действие</p>
   <input type = submit value="+" name = "deistvie">
   <input type = submit value="-" name = "deistvie">
   <input type = submit value="*" name = "deistvie">
   <input type = submit value="/" name = "deistvie">
   <p >=</p>
   
   <?php
    $a=$_POST['znachenie1'];
    $b=$_POST['znachenie2'];
    $c=$_POST['deistvie'];
    ?>
    <p>
    <?php
    if($b==0 && $c=='/'){
      echo "Делить на ноль нельзя";
   }else{
      switch($c){
         case "+":
           echo $a+$b;
         break;
         case "-":
           echo $a-$b;
         break;
         case "*":
           echo $a*$b;
         break;
         case "/":
           echo $a/$b;
         break;
      };
   };
    ?>
    </p>
  </form>
