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
		$ID						= time();
		$FJnsAlokasi			= $_POST['FJnsAlokasi'];
		$FJumlahDana			= $_POST['FJumlahDana'];
		$FJumlahTransaksi		= $_POST['FJumlahTransaksi'];
		$FNamaLengkap			= $_POST['FNamaLengkap'];
		$FHP					= $_POST['FHP'];
		$FEMail					= $_POST['FEMail'];
		$FDate					= date("l-d-F-Y H:i:s");
		if(!empty($FJnsAlokasi) && !empty($FJumlahDana) && !empty($FJumlahTransaksi) && !empty($FNamaLengkap) && !empty($FHP) && !empty($FEMail)){
			$QAdd = mysqli_query($Connection,"INSERT INTO Bantuan(ID_Bantuan,Jenis_Alokasi,Jumlah_Transaksi,Jumlah_Dana,Nama_Lengkap,No_HP,Email,Tanggal) VALUES('$ID','$FJnsAlokasi','$FJumlahDana','$FJumlahTransaksi', '$FNamaLengkap', '$FHP', '$FEMail', '$FDate')");
			if($QAdd && isset($_GET['Action'])){
				if($_GET['Action'] == 'Tambah'){
				}
			}
		}else{
		}
	}
?>
<div class="row">
	<div class="col-sm-12">
		<div class="box box-default box-solid">
			<!-- Box Header -->
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-user-plus"></i>&nbsp;.: Form Tambah Penerimaan Bantuan Covid 19 :.</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<!-- Box Header -->
			<!-- Box Body -->
			<form action="" method="POST" name="Add-Bantuan" class="form-horizontal" enctype="multipart/form-data">
				<div class="box-body">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FJnsAlokasi" class="col-sm-2 control-label">Jenis Alokasi *</label>
							<div class="col-sm-10">
								<select class="form-control"  name="FJnsAlokasi" id="FJnsAlokasi" required>
									<option value="" selected>-- Select --</option>
									<option value="APD">Alat Pelindung Diri</option>
									<option value="LM">Logistik Mahasiswa</option>
									<option value="BKM">Bantuan Kuota Mahasiswa</option>
									<option value="HS">Hand Sanitizer</option>
									<option value="SM">Sembako Masyarakat</option>
								</select>
								<span class="help-block"> * Jenis Alokasi Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FJumlahTransaksi" class="col-sm-2 control-label">Jumlah Transaksi</label>
							<div class="col-sm-10">
								<input type="FJumlahTransaksi" class="form-control" name="FJumlahTransaksi" id="FJumlahTransaksi" placeholder="10">
								<span class="help-block"> * Jumlah Transaksi Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FJumlahDana" class="col-sm-2 control-label">Jumlah Dana</label>
							<div class="col-sm-10">
								<input type="FJumlahDana" class="form-control" name="FJumlahDana" id="FJumlahDana" placeholder="Rp 1000.000">
								<span class="help-block"> * Jumlah Dana Wajib Diisi</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FNamaLengkap" class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FNamaLengkap" id="FNamaLengkap" placeholder="Jhon Doe">
								<span class="help-block"> * Nama Lengkap Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FHP" class="col-sm-2 control-label">No HP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FHP" data-inputmask="'mask': ['999-999-999-999]', '+099 999 999 99[9]-999']" data-mask>
								<span class="help-block"> * No HP Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FEMail" class="col-sm-2 control-label">E-Mail</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FEMail" id="FEMail" placeholder="JhonDoe@mail.com">
								<span class="help-block"> * E-Mail Wajib Diisi</span>
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
function Tampil($Connection){$QShow = mysqli_query($Connection,"SELECT * FROM Bantuan"); $NO=1;
?>
	<!-- Info boxes -->
	<div class="row">
		<div class="col-md-12">
			<div class="box box-default box-solid">
				<!-- Box Header -->
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-users"></i>&nbsp;.: Data Penerimaan Bantuan :.</h3>
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
								<th rowspan="1"><center>Nama Lengkap</center></th>
								<th rowspan="1"><center>No HP</center></th>
								<th rowspan="1"><center>E-Mail</center></th>
								<th rowspan="1"><center>Jenis Alokasi</center></th>
								<th rowspan="1"><center>Jumlah Transaksi</center></th>
								<th rowspan="1"><center>Jumlah Dana</center></th>
								<th rowspan="1"><center>Tanggal</center></th>
								<th rowspan="1"><center>Tools</center></th>
							</tr>
						</thead>
						<tbody>
						<?php while($Data = mysqli_fetch_array($QShow)){ ?>
							<tr>
								<td><center><?php echo $NO++; ?></center></td>
								<td><center><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $Data[4]; ?></a></center></td>
								<td><center><?php echo $Data[5]; ?></center></td>
								<td><center><a href="mailto:<?php echo $Data[6]; ?>"><?php echo $Data[6]; ?></a></center></td>
								<td><center><?php echo $Data[1]; ?></center></td>
								<td><center><?php echo $Data[3]; ?></center></td>
								<td><center>Rp. <?php echo $Data[2]; ?></center></td>
								<td><center><?php echo $Data[7]; ?></center></td>
								<td><center>
									<div class="btn-group">
										<a class="ask btn btn-danger" href="Index.php?Url=Bantuan&Action=Hapus&ID=<?php echo $Data[0]; ?>"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
										<a class="btn btn-default" href="Index.php?Url=Bantuan&Action=Ubah&ID=<?php echo $Data[0]; ?>">Ubah&nbsp;<i class="fa fa-edit"></i></a>
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
						<a href="?Url=Bantuan&Action=Tambah" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp;TAMBAH ACCOUNT</a>
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
		$QDelete = mysqli_query($Connection,"DELETE FROM Bantuan WHERE ID_Bantuan='$ID'");

		if($QDelete){
			if($_GET['Action'] == 'Hapus'){
				echo "<script>window.alert('Data Berhasil Terhapus!');window.location=('Index.php?Url=Bantuan')</script>";
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
		$FUJnsAlokasi			= $_POST['FUJnsAlokasi'];
		$FUJumlahDana			= $_POST['FUJumlahDana'];
		$FUJumlahTransaksi		= $_POST['FUJumlahTransaksi'];
		$FUNamaLengkap			= $_POST['FUNamaLengkap'];
		$FUHP					= $_POST['FUHP'];
		$FUEMail				= $_POST['FUEMail'];
		$FUDate					= date("l-d-F-Y H:i:s");
		if(!empty($FUJnsAlokasi) && !empty($FUJumlahDana) && !empty($FUJumlahTransaksi) && !empty($FUNamaLengkap) && !empty($FUHP) && !empty($FUEMail)){
			$QUpdate = mysqli_query($Connection,"UPDATE Bantuan SET Jenis_Alokasi='$FUJnsAlokasi',Jumlah_Transaksi='$FUJumlahTransaksi',Jumlah_Dana='$FUJumlahDana',Nama_Lengkap='$FUNamaLengkap',No_HP='$FUHP',Email='$FUEMail',Tanggal='$FUDate' WHERE ID_Bantuan='$ID'");
			if($QUpdate && isset($_GET['Action'])){
				if($_GET['Action'] == 'Ubah'){
					$Msg = "<div class='alert alert-success alert-dismissible'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								<h4><i class='icon fa fa-check'></i> Data Dengan Nama Penerima $FUNamaLengkap Berhasil Di Perbaharui !</h4>
							</div>";
				}
			}
		}else {
			$Msg = "<div class='alert alert-warning alert-dismissible'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<h4><i class='icon fa fa-check'></i> Tidak Dapat Menyimpan, Data Belum Lengkap !</h4>
					</div>";
		}
	}

	// Tampilkan Data Form Ubah
	$ID = $_GET['ID'];
	$Query = mysqli_query($Connection,"SELECT * FROM Bantuan WHERE ID_Bantuan='$ID'");
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
				<h3 class="box-title"><i class="fa fa-edit"></i>&nbsp;.: Form Ubah Penerimaan Bantuan Covid 19 :.</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<!-- Box Header -->
			<!-- Box Body -->
			<form action="" method="POST" name="Change-Account" class="form-horizontal" enctype="multipart/form-data">
				<div class="box-body">
					<?php echo isset($Msg) ? $Msg : "" ?>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FUJnsAlokasi" class="col-sm-2 control-label">Jenis Alokasi *</label>
							<div class="col-sm-10">
								<select class="form-control"  name="FUJnsAlokasi" id="FUJnsAlokasi" required>
									<option value="" selected>-- Select --</option>
									<option value="APD" <?php if($Data[1] == 'APD'){ echo 'Selected'; } ?> >Alat Pelindung Diri</option>
									<option value="LM" <?php if($Data[1] == 'LM'){ echo 'Selected'; } ?> >Logistik Mahasiswa</option>
									<option value="BKM" <?php if($Data[1] == 'BKM'){ echo 'Selected'; } ?> >Bantuan Kuota Mahasiswa</option>
									<option value="HS" <?php if($Data[1] == 'HS'){ echo 'Selected'; } ?> >Hand Sanitizer</option>
									<option value="SM" <?php if($Data[1] == 'SM'){ echo 'Selected'; } ?> >Sembako Masyarakat</option>
								</select>
								<span class="help-block"> * Jenis Alokasi Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUJumlahTransaksi" class="col-sm-2 control-label">Jumlah Transaksi</label>
							<div class="col-sm-10">
								<input type="FUJumlahTransaksi" class="form-control" name="FUJumlahTransaksi" id="FUJumlahTransaksi" placeholder="10" value="<?php echo $Data[3]; ?>">
								<span class="help-block"> * Jumlah Transaksi Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUJumlahDana" class="col-sm-2 control-label">Jumlah Dana</label>
							<div class="col-sm-10">
								<input type="FUJumlahDana" class="form-control" name="FUJumlahDana" id="FUJumlahDana" placeholder="Rp 1000.000" value="<?php echo $Data[2]; ?>">
								<span class="help-block"> * Jumlah Dana Wajib Diisi</span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="FUNamaLengkap" class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUNamaLengkap" id="FUNamaLengkap" placeholder="Jhon Doe" value="<?php echo $Data[4]; ?>">
								<span class="help-block"> * Nama Lengkap Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUHP" class="col-sm-2 control-label">No HP</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUHP" value="<?php echo $Data[5]; ?>" data-inputmask="'mask': ['999-999-999-999]', '+099 999 999 99[9]-999']" data-mask>
								<span class="help-block"> * No HP Wajib Diisi</span>
							</div>
						</div>
						<div class="form-group">
							<label for="FUEMail" class="col-sm-2 control-label">E-Mail</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="FUEMail" id="FUEMail" placeholder="JhonDoe@mail.com" value="<?php echo $Data[6]; ?>">
								<span class="help-block"> * E-Mail Wajib Diisi</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Box Body -->
				<!-- Box Footer -->
				<div class="box-footer">
					<div>
						<a href="Index.php?Url=Bantuan" class="btn btn-danger">CANCEL&nbsp;<i class="fa fa-times"></i></a>
						<button type="submit" name="Cmd_Ubah" class="btn btn-success pull-right"><i class="fa fa-save"></i>&nbsp;SIMPAN</button>
					</div>
				</div>
			</form>
		</div>
		<!-- Box Footer -->
	</div>
	<!-- Box -->
</div>
<!-- Col -->
<?php
}
?>
