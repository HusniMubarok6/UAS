<?php
$Online = "Online";
$Offline = "Offline";
if (isset($_GET['Url'])){
	if ($_GET['Url']=='Account'){
		$Account	= "active";
		$MAccount	= "active menu-open";
		$Title		= "Account";
	}else
	if ($_GET['Url']=='Dashboard'){
		$Dashboard	= "active";
		$MDashboard	= "active menu-open";
		$Title		= "Dashboard";
	}
};
?>