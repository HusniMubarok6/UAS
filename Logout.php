<?php
if(!isset($_SESSION)){session_start();}
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
*/
require_once'../Configuration/Configuration.php';
require_once '../Library/Php/Session.php';
$HLogout = date("Y-m-d H:i:s");
mysqli_query($Connection,"UPDATE Account SET History_Logout='$HLogout',Status='OFF' WHERE Username='$SUsername'");
unset($_SESSION['AdminZS']);
unset($_SESSION['Username']);
unset($_SESSION['SID']);
unset($_SESSION['Password']);
unset($_SESSION['Captcha']);
header('Location:Index.php');
?>
<?php
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
*/
?>

