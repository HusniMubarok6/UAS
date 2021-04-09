<?php if(!isset($_SESSION)){session_start();} error_reporting(0);
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 */
	if (!isset($_SESSION['Log_Valid'])){$_SESSION['Log_Valid']=0;}
	$Jml=$_SESSION['Log_Valid']+1;
	unset($_SESSION['Log_Valid']);
	require_once '../Configuration/Configuration.php';

$_SESSION['Log_Valid']=$Jml;
/* Echo $Jml; */
if ($Jml<10){

if (isset($_POST['Captcha'])){
if(md5(md5($_POST['Captcha'].'SESCAP'.$SESCAP)) == $_SESSION[$SESCAP.'SESCAP']){

$User = $_POST['username'];
$Pass = hash("whirlpool",$_POST['password']);

$Query=mysqli_query($Connection,"SELECT * FROM Account WHERE Username='$User' AND Password='$Pass'");
$SQL=mysqli_fetch_array($Query);

if ($SQL['Username'] == $User AND $SQL['Password'] == $Pass){
	if(!isset($_SESSION)){session_start();}
	$_SESSION['Username'] = $SQL[0];
	require_once '../Library/Php/Session.php';
	$SID_Old = session_id();
	session_regenerate_id();
	$SID_New = session_id();
	$HLogin = date("d-m-Y H:i:s");
	mysqli_query($Connection,"UPDATE Account SET Status='ON',History_Login='$HLogin',Session_ID='$SID_New' WHERE Username='$User'");
	//header('location:Index.php?Url=Dashboard');
	echo "<script>window.alert('Test Jika Benar.');window.location=('Index.php?Url=Dashboard')</script>";
}else{echo "<script>window.alert('Kesalahan Kombinasi Username Dan Password, Silahkan Ulangi Lagi.');window.location=('Index.php')</script>";}
}else{echo "<script>window.alert('Kesalahan, kode yang anda masukkan belum tepat.');window.location=('Index.php')</script>";}
}else{echo "<script>window.alert('Anda belum memasukkan kode Captcha silahkan ulangi');window.location=('Index.php')</script>";}
}else{echo "<script>window.alert('Terlalu banyak kesalahan yang anda buat !');window.location=('Index.php')</script>";}?>
<?php
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
 */
?>
