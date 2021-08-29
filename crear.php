<?php 

setcookie('Abarotes',$_GET['compras'],time()+86400,'/');
header('Location:index.php');
 ?>