<?php
	if (isset($_POST['Cmd_Save'])){
			$FUsername = $_POST['FUsername'];
			$FFullName = $_POST['FFullName'];
			$FEMail = $_POST['FEMail'];
			$FHP = $_POST['FHP'];
			$FPassword = $_POST['FPassword'];
			$REFPassword = $_POST['REFPassword'];
			$FAccess = $_POST['FAccess'];
			$Now = date("Y-m-d");
			$Status = "Offline";
			$Block = "N";
			$FPhoto = $_FILES['FPhoto']['Name'];
			$Tmp = $_FILES['FPhoto']['Tmp_Name'];
			$NewPhoto = date('dmYHis').$FPhoto;
			$Path = "../Library/Images/Upload/Account/".$NewPhoto;
			if(!empty($FUsername) && !empty($FPassword) && !empty($FFullName) && !empty($FEMail) && !empty($FHP) && !empty($FAccess)){
				if(move_uploaded_file($Tmp, $Path)){
				$Sql = "INSERT INTO account (Username,Password,Full_Name,E_Mail,No_HP,Access,Status,Block,Created,Photo)
				VALUES('$FUsername','$FPassword','$FFullName','$FEMail','$FHP','$FAccess','$Status','$Block','$Now','$FPhoto')";
				$SQLSave = mysqli_query($Connection,$Sql);
				if($SQLSave && isset($_GET['Action'])){
					if($_GET['Action'] == 'Tambah'){
					}
				}
			} else {
				$Msg = "Tidak dapat menyimpan, data belum lengkap!";
			}
?>