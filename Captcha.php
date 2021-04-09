<?php
/* Zetix Arch-Soft Inc. www.Zearch-Soft.Blogspot.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
 */

require_once'../../Configuration/Configuration.php';

if(!isset($_SESSION)){session_start();}  
$AlphaNumeric  = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
$Random = substr(str_shuffle($AlphaNumeric), 0, 5);
$Image = imagecreatefromjpeg("../Images/CPanel/Background.jpg");
$TextColor = imagecolorallocate ($Image, 0, 0, 0); //Black
imagestring ($Image, 5, 5, 8,  $Random, $TextColor); 

$_SESSION[$SESCAP.'SESCAP'] = md5(md5($Random.'SESCAP'.$SESCAP));
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Pragma: no-cache"); 	
header('Content-type: image/jpeg');
imagejpeg($Image);
imagedestroy($Image);
?>

<?php
/* Zetix Arch-Soft Inc. www.Zearch-Soft.Blogspot.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
 */
?>