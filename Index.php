<?php
/*
===================================================================
--- Program Utama ---
===================================================================
*/
if (isset($_GET['Action'])){
	switch($_GET['Action']){
		case "Ubah":
			Ubah($Connection);
		break;
		case "Hapus":
			Hapus($Connection);
		break;
		default:
			Tambah($Connection);
	}
}else{ Tampil($Connection); }
/*
===================================================================
--- Program Utama ---
===================================================================

-------------------------------------------------------------------

===================================================================
--- Function Tambah ---
===================================================================
*/
function Tambah($Connection){
	if (isset($_POST['Cmd_Save'])){
		$FUsername		= $_POST['FUsername'];
		$FPassword		= hash("whirlpool",$_POST['FPassword']);
		$REFPassword	= hash("whirlpool",$_POST['REFPassword']);
		$FFullName		= $_POST['FFullName'];
		$FE_Mail		= $_POST['FEMail'];
		$FHP			= $_POST['FHP'];
		$FAccess		= $_POST['FAccess'];
		$FBlock			= $_POST['FBlock'];
		$FDate			= date("d-m-Y");
		/*
		$FFoto		= $_POST['FFoto'];
		*/
		if(!empty($FUsername) && !empty($FPassword) && !empty($FFullName) && !empty($FE_Mail) && !empty($FHP) && !empty($FAccess) && !empty($FBlock)){
			if($FPassword==$REFPassword){
			$QAdd = mysqli_query($Connection,"INSERT INTO Account(Username,Password,Full_Name,E_Mail,No_HP,Access,Status,Block,Created,History_Login,History_Logout,Session_ID,Photo) VALUES('$FUsername','$FPassword', '$FFullName', '$FE_Mail', '$FHP', '$FAccess', 'OFF', '$FBlock', '$FDate', '', '', '', '')");
			if($QAdd && isset($_GET['Action'])){
				if($_GET['Action'] == 'Tambah'){

				}
			}
			} else {
				echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
			}
		}else{
			$Msg = "Tidak dapat menyimpan, data belum lengkap!";
		}
	}
?>
<div class="row">
	<div class="col-sm-12">
		<div class="box box-default box-solid">
			<!-- Box Header -->
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-user-plus"></i>&nbsp;.: Form Tambah Account :.</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<!-- Box Header -->
			<!-- Box Body -->
			<form action="" method="POST" name="Add-Account" class="form-horizontal" enctype="multipart/form-data">
				<div class="box-body">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FUsername" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUsername" id="FUsername" placeholder="Username">
								<span class="help-block">Nama pengguna tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FFullName" class="col-sm-2 control-label">Full Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FFullName" id="FFullName" placeholder="Full Name">
								<span class="help-block">Nama panjang pengguna perlu diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FE-Mail" class="col-sm-2 control-label">E-Mail</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FEMail" id="FE-Mail" placeholder="E-Mail@Mail.Com">
								<span class="help-block">E-Mail pengguna perlu diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FHP" class="col-sm-2 control-label">No HP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FHP" data-inputmask="'mask': ['999-999-999-999]', '+099 999 999 99[9]-999']" data-mask>
								<span class="help-block">No HP pengguna perlu diisi</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FPassword" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="FPassword" id="FPassword" placeholder="Password">
								<span class="help-block">Password perlu diisi</span>
							</div>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="REFPassword" id="REF-Password" placeholder="Password">
								<span class="help-block">Nama pengguna tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FAccess" class="col-sm-2 control-label">Access</label>
							<div class="col-sm-10">
								<select class="form-control"  name="FAccess" id="FAccess">
									<option value="" selected>-- Select --</option>
									<option value="Administrator">Administrator</option>
									<option value="Operator">Operator</option>
								</select>
								<span class="help-block">Access tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FBlock" class="col-sm-2 control-label">Block</label>
							<div class="col-sm-10">
								<input type="radio" name="FBlock" id="FBlock" value="N">NO
								<input type="radio" name="FBlock" id="FBlock" value="Y">YES
								<span class="help-block">Block tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FPhoto" class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								<input type="file" name="FPhoto" id="FPhoto">
								<span class="help-block">Foto tidak dapat diubah</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Box Body -->
				<!-- Box Footer -->
				<div class="box-footer">
					<div>
						<button type="reset" name="Cmd_Cancel" class="btn btn-danger" onclick="self.history.back()">CANCEL&nbsp;<i class="fa fa-times"></i></button>
						<button type="submit" name="Cmd_Save" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;SIMPAN</button>
					</div>
				</div>
			</form>
			<?php include "Message-Danger.php";?>
		</div>
		<!-- Box Footer -->
	</div>
	<!-- Box -->
</div>
<!-- Col -->
<?php
};
/*
===================================================================
--- Function Tambah ---
===================================================================

-------------------------------------------------------------------

===================================================================
--- Function Tampil ---
===================================================================
*/
function Tampil($Connection){$QShow = mysqli_query($Connection,"SELECT * FROM Account ORDER BY Username DESC"); $NO=1;
?>
	<!-- Info boxes -->
	<div class="row">
		<div class="col-md-12">
			<div class="box box-default box-solid">
				<!-- Box Header -->
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-users"></i>&nbsp;.: Data Account User :.</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<!-- Box Header -->
				<!-- Box Body -->
				<div class="box-body">
					<table id="TAccount" class="table table-bordered table-striped" border="1" rowspan="11" colspan="12">
						<thead>
							<tr>
								<th rowspan="1"><center>No</center></th>
								<th rowspan="1"><center>Username</center></th>
								<th rowspan="1"><center>Full Name</center></th>
								<!-- th rowspan="1"><center>E-Mail</center></th -->
								<!-- th rowspan="1"><center>No HP</center></th -->
								<th rowspan="1"><center>Access</center></th>
								<th rowspan="1"><center>Status</center></th>
								<th rowspan="1"><center>Block</center></th>
								<th rowspan="1"><center>Created</center></th>
								<!-- th rowspan="1"><center>History Log-In</center></th -->
								<!-- th rowspan="1"><center>History Log-Out</center></th -->
								<!-- th rowspan="1"><center>Photo</center></th -->
								<th rowspan="1"><center>Tools</center></th>
							</tr>
						</thead>
						<tbody>
						<?php while($Data = mysqli_fetch_array($QShow)){ ?>
							<tr>
								<td><center><?php echo $NO++; ?></center></td>
								<td><center><?php echo $Data[0]; ?></center></td>
								<td><center><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $Data[2]; ?></center></td>
								<!-- td><center><a href="mailto:<?php /* echo $Data[3]; */ ?>"><?php /* echo $Data[3]; */ ?></a></center></td -->
								<!-- td><center><?php /* echo $Data[4]; */ ?></center></td -->
								<td><center>
								<?php
									if($Data[5] == 'Administrator'){
										echo '<span class="label label-success">Administrator</span>';
									}else
									if ($Data[5] == 'Operator'){
										echo '<span class="label label-primary">Operator</span>';
									}
								?>
								</center></td>
								<td><center>
								<?php
									if($Data[6] == 'ON'){
										echo '<i class="fa fa-circle text-success"></i>&nbsp;ONLINE';
									}else
									if ($Data[6] == 'OFF'){
										echo '<i class="fa fa-circle text-default"></i>&nbsp;OFFLINE';
									}
								?>
								</center></td>
								<td><center>
								<?php
									if($Data[7] == 'Y'){
										echo '<span class="label label-danger">YES</span>';
									}else
									if ($Data[7] == 'N'){
										echo '<span class="label label-success">NO</span>';
									}
								?>
								<center></td>
								<td><center><?php echo $Data[8]; ?></center></td>
								<!-- td><center><?php /* echo $Data[9]; */ ?></center></td -->
								<!-- td><center><?php /* echo $Data[10]; */ ?></center></td -->
								<!-- td><center><?php /* echo'<img src="data:image/jpeg;base64,'.base64_encode($Data[11]).'" alt="User Image">' */ ?></center></td -->
								<td><center>
									<div class="btn-group">
										<a class="ask btn btn-danger" href="Index.php?Url=Account&Action=Hapus&ID=<?php echo $Data[0]; ?>"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
										<a class="btn btn-default" href="Index.php?Url=Account&Action=Ubah&ID=<?php echo $Data[0]; ?>">Ubah&nbsp;<i class="fa fa-edit"></i></a>
									</div>
								</center></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- Box Body -->
				<!-- Box Footer -->
				<div class="box-footer">
					<div>
						<a href="?Url=Account&Action=Tambah" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;TAMBAH ACCOUNT</a>
					</div>
				</div>
				<!-- Box Footer -->
			</div>
			<!-- Box -->
		</div>
		<!-- /Col -->
	</div>
<!-- /Row -->
<?php
};
/*
===================================================================
--- Function Tampil ---
===================================================================

-------------------------------------------------------------------

===================================================================
--- Function Hapus ---
===================================================================
*/
function Hapus($Connection){
	if(isset($_GET['ID']) && isset($_GET['Action'])){
		$ID = $_GET['ID'];
		$QDelete = mysqli_query($Connection,"DELETE FROM Account WHERE Username='$ID'");

		if($QDelete){
			if($_GET['Action'] == 'Hapus'){
				echo '<script>window.history.back()</script>';
			};
		};
	};
};
/*
===================================================================
--- Function Hapus ---
===================================================================

-------------------------------------------------------------------

===================================================================
--- Function Ubah ---
===================================================================
*/

function Ubah($Connection){
	if(isset($_POST['Cmd_Ubah'])){
		$ID				= $_GET['ID'];
		$FUPassword		= hash("whirlpool", $_POST['FUPassword']);
		$REUFPassword	= hash("whirlpool", $_POST['REUFPassword']);
		$FUFullName		= $_POST['FUFullName'];
		$FUE_Mail		= $_POST['FUEMail'];
		$FUHP			= $_POST['FUHP'];
		$FUAccess		= $_POST['FUAccess'];
		$FUBlock		= $_POST['FUBlock'];

		if(!empty($FUPassword) && !empty($FUFullName) && !empty($FUE_Mail) && !empty($FUHP) && !empty($FUAccess) && !empty($FUBlock)){
			if($FUPassword==$REUFPassword){
				$QUpdate = mysqli_query($Connection,"UPDATE Account SET Password='$FUPassword',Full_Name='$FUFullName',E_Mail='$FUE_Mail',No_HP='$FUHP',Access='$FUAccess',Block='$FUBlock' WHERE Username='$ID'");
				if($QUpdate && isset($_GET['Action'])){
					if($_GET['Action'] == 'Ubah'){

					}
				}
			} else {
				echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
			}
		}else {
			$Msg = "Data Tidak Lengkap!";
		}
	}

	// Tampilkan Data Form Ubah
	$ID = $_GET['ID'];
	$Query = mysqli_query($Connection,"SELECT * FROM Account WHERE Username='$ID'");
	if(mysqli_num_rows($Query) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$Data = mysqli_fetch_array($Query);
	}
?>
<div class="row">
	<div class="col-sm-12">
		<div class="box box-success box-solid">
			<!-- Box Header -->
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-edit"></i>&nbsp;.: Form Ubah Account :.</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<!-- Box Header -->
			<!-- Box Body -->
			<form action="" method="POST" name="Change-Account" class="form-horizontal" enctype="multipart/form-data">
				<div class="box-body">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FUUsername" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUUsername" id="FUUsername" placeholder="Username" value="<?php echo $Data[0]; ?>" Disabled >
								<span class="help-block">Nama pengguna tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUFullName" class="col-sm-2 control-label">Full Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUFullName" id="FUFullName" placeholder="Full Name" value="<?php echo $Data[2]; ?>">
								<span class="help-block">Nama panjang pengguna perlu diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUEMail" class="col-sm-2 control-label">E-Mail</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUEMail" id="FUEMail" placeholder="E-Mail@Mail.Com" value="<?php echo $Data[3]; ?>">
								<span class="help-block">E-Mail pengguna perlu diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUHP" class="col-sm-2 control-label">No HP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUHP" id="FUHP" data-inputmask="'mask': ['999-999-999-999]', '+099 999 999 99[9]-999']" data-mask value="<?php echo $Data[4]; ?>">
								<span class="help-block">No HP pengguna perlu diisi</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FUPassword" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="FUPassword" id="FUPassword" placeholder="Password" value="<?php echo $Data[1]; ?>">
								<span class="help-block">Password perlu diisi</span>
							</div>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="REUFPassword" id="REUFPassword" placeholder="Password" value="<?php echo $Data[1]; ?>">
								<span class="help-block">Nama pengguna tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUAccess" class="col-sm-2 control-label">Access</label>
							<div class="col-sm-10">
								<select class="form-control" style="width: 100%;" name="FUAccess" id="FUAccess">
									<option value="" selected>-- Select --</option>
									<option value="Administrator" <?php if($Data[5] == 'Administrator'){ echo 'Selected'; } ?> >Administrator</option>
									<option value="Operator" <?php if($Data[5] == 'Operator'){ echo 'Selected'; } ?> >Operator</option>
								</select>
								<span class="help-block" class="col-sm-2 control-label">Access tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUBlock" class="col-sm-2 control-label">Block</label>
							<div class="col-sm-10">
								<input type="radio" name="FUBlock" id="FUBlock" value="N" <?php if($Data[7] == 'N'){ echo 'Checked'; } ?>>NO
								<input type="radio" name="FUBlock" id="FUBlock" value="Y" <?php if($Data[7] == 'Y'){ echo 'Checked'; } ?>>YES
								<span class="help-block">Block tidak dapat diubah</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUPhoto" class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								<input type="file" name="FUPhoto" id="FPhoto">
								<span class="help-block">Foto tidak dapat diubah</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Box Body -->
				<!-- Box Footer -->
				<div class="box-footer">
					<div>
						<a href="Index.php?Url=Account" class="btn btn-danger">CANCEL&nbsp;<i class="fa fa-times"></i></a>
						<button type="submit" name="Cmd_Ubah" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;SIMPAN</button>
					</div>
				</div>
			</form>
			<?php include "Message-Danger.php";?>
		</div>
		<!-- Box Footer -->
	</div>
	<!-- Box -->
</div>
<!-- Col -->
<?php
}
?>
