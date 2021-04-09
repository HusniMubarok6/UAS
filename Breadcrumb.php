<?php
if (isset($_GET['Url'])){
	if ($_GET['Url']=='Account'){
		echo"
		<ol class='breadcrumb'>
			<li><a href='Index.php?Url=Dashboard'><i class='fa fa-dashboard'></i> Home</a></li>
			<li class='$Account'>Account</li>
		</ol>
		";
	}else
	if ($_GET['Url']=='Dashboard'){
		echo"
		<ol class='breadcrumb'>
			<li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
			<li class='$Dashboard'>Dashboard</li>
		</ol>
		";
	}
};
?>
