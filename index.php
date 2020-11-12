<?php
    header("Refresh:2");
    include "zapros.php";
    $sql = "select * from photo order by count desc";
    $result = mysqli_query ($connect,$sql);


   while ($data = mysqli_fetch_assoc($result)){
?>
<a href="bigpicture.php?img=<?=$data['name']?>&id=<?=$data['id']?>&count=<?=$data['count']?>" target="_blank">
	<img class = "picture" width ="300" src="img/<?=$data['name']?>"><hr>
    </a>
<?
    }
    echo $data;
   
	
?>