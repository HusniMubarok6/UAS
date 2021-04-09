<?php
if (isset($_GET['Url'])){
	if ($_GET['Url']=='Account'){
		include "Account/Index.php";
	}else
	if ($_GET['Url']=='Bantuan'){
		include "Bantuan/Index.php";
	}
	if ($_GET['Url']=='Dashboard'){
		include "Dashboard.php";
	}
}
?>
