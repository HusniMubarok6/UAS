<?php
$SUsername = $_SESSION['Username'];
$Query=mysqli_query($Connection,"SELECT * FROM Account WHERE Username='$SUsername'");
$SQuery=mysqli_fetch_array($Query);
	$SPassword = $SQuery[1];
	$SFName = $SQuery[2];
	$SEMail = $SQuery[3];
	$SHP = $SQuery[4];
	$SAccess = $SQuery[5];
	$SStatus = $SQuery[6];
	$SBlock = $SQuery[7];
	$SCreated = $SQuery[8];
	$SHistoryLogin = $SQuery[9];
	$SHistoryLogout = $SQuery[10];
	$SSID = $SQuery[11];
	$SPhoto = $SQuery[12];
?>