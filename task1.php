
<form style= "display:flex;" action="task1.php" method ="post">
<p>Значение 1 </p>
   <input type="text" name= "znachenie1">
   <p>Действие</p>
   <select name="deistvie">
   <option value=""></option>
   <option value="sum">+</option>
   <option value="raznost">-</option>
   <option value="proizvedenie">*</option>
   <option value="delenie">/</option>
   </select>
   <p>Значение 2</p>
   <input type="text" name= "znachenie2">
   <input type="submit" value= "=">
   <?php
    $a=$_POST['znachenie1'];
    $b=$_POST['znachenie2'];
    $c=$_POST['deistvie'];
    if($b==0 && $c=='delenie'){
       echo "Делить на ноль нельзя";
    }else{
       switch($c){
          case "sum":
            echo $a+$b;
          break;
          case "raznost":
            echo $a-$b;
          break;
          case "proizvedenie":
            echo $a*$b;
          break;
          case "delenie":
            echo $a/$b;
          break;
       };
    };
   ?>
   </form>
