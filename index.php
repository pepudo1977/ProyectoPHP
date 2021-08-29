<?php 
if (!$_COOKIE['Abarotes']) {
	header('Location:index_mostrar.php');

}else if ($_COOKIE['Abarotes']=='frutas') {
	header('Location:frutas.php');

	}else if ($_COOKIE['Abarotes']=='carnes') {
	header('Location:carnes.php');

}else if ($_COOKIE['Abarotes']=='vegetales') {
	header('Location:vegetales.php');
}

 ?> 