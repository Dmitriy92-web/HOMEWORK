<h1>Количество просмотров до этого <?=$_GET['count']?> <a href="index.php">вернуться на главную</a></h1>
<img src="img/<?= $_GET['img']?>">
<?php
$id = $_GET['id'];
$count = $_GET['count']+1;
include "zapros.php";
$sql = "update photo set count=$count where id=$id";
mysqli_query($connect,$sql);

  

?>

