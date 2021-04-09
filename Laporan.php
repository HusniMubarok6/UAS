<?php if(!isset($_SESSION)){session_start();}
/* Zetix Arch-Soft Inc. www.Zearch-Soft.com
 * @Copyright Copyright (C) 2017 CMS Zesoft Open Source, Inc. All Rights Reserved.
 * @License		GNU General Public License Version 2 Or Later; See LICENSE.TxT
 * Jeffri Gunawan Jeffrislackware@gmail.com
 */
	require_once '../../Configuration/Configuration.php';
	include_once '../../Library/Plugin/FPDF/fpdf.php';

	// Membuat Objek Baru Bernama pdf Dari Class FPDF
	// Dan Melakukan Setting Kertas l : Landscape, A4 : Ukuran Kertas
	$pdf = new FPDF('l','mm','A4');
	
	// Membuat Halaman Baru
	$pdf->AddPage();
	
	// Menyetel Font Yang Digunakan, Font Yang Digunakan Adalah Arial, Bold Dengan Ukuran 16
	$pdf->SetFont('Arial','B',16);
	
	// Judul
	$pdf->Cell(279,6,'Laporan Penerimaan Bantuan Sosial COVID-19',1,1,'C');
	$pdf->Cell(279,4,'',1,1);
	$pdf->SetFont('Arial','B',12);
	$Date = date("l d F Y");
	$Time = date("H:i");
	$pdf->Cell(40,6,'Sampai Dengan : ',1,0);
	$pdf->Cell(60,6,$Date,1,0,'C');
	$pdf->Cell(30,6,'Pukul : ',1,0);
	$pdf->Cell(20,6,$Time,1,1,'C');
	
	// Memberikan Space Kebawah Agar Tidak Terlalu Rapat
	$pdf->Cell(10,7,'',0,1);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(12,6,'NO',1,0,'C');
	$pdf->Cell(24,6,'ID',1,0,'C');
	$pdf->Cell(32,6,'NAMA',1,0,'C');
	$pdf->Cell(35,6,'NO HP',1,0,'C');
	$pdf->Cell(48,6,'E-MAIL',1,0,'C');
	$pdf->Cell(22,6,'ALOKASI',1,0,'C');
	$pdf->Cell(24,6,'TRANSAKSI',1,0,'C');
	$pdf->Cell(22,6,'DANA',1,0,'C');
	$pdf->Cell(60,6,'TANGGAL',1,1,'C');
	
	$pdf->SetFont('Arial','',10);
		
	//Koneksi Ke Database
	$No = 1;
	$QShow = mysqli_query($Connection,"SELECT * FROM Bantuan");
	while ($QView = mysqli_fetch_array($QShow)){
		$pdf->Cell(12,6,$No++,1,0,'C');
		$pdf->Cell(24,6,$QView['0'],1,0,'C');
		$pdf->Cell(32,6,$QView['4'],1,0);
		$pdf->Cell(35,6,$QView['5'],1,0,'C'); 
		$pdf->Cell(48,6,$QView['6'],1,0);
		$pdf->Cell(22,6,$QView['1'],1,0);
		$pdf->Cell(24,6,$QView['3'],1,0); 
		$pdf->Cell(22,6,$QView['2'],1,0);
		$pdf->Cell(60,6,$QView['7'],1,1,'C');
	}
	
	$pdf->Output();
?>