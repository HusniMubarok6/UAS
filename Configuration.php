<?php
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 */
$Connection = mysqli_connect("localhost","root","","help");
// Check Connection
if (mysqli_connect_errno())
	{
		echo "Failed To Connect To MySQL: " . mysqli_connect_error();
	}
/* SESSION CAPTCHA */
$SESCAP=md5("CAPTCHA");
date_default_timezone_set('Asia/Jakarta');
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 */
?>
