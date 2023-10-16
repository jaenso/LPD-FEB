<?php
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan Perjalanan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- css yang digunakan ketika dalam mode screen -->
	<link href="style.css" rel="stylesheet" media="screen">
	
	<!-- ss yang digunakan tampilkan ketika dalam mode print -->
	<link href="print.css" rel="stylesheet" media="print">
	
	<script src="jquery-1.8.3.min.js"></script>
	<script src="jquery.PrintArea.js"></script>
	<script>
		(function($) {
			// fungsi dijalankan setelah seluruh dokumen ditampilkan
			$(document).ready(function(e) {
				
				// aksi ketika tombol cetak ditekan
				$("#cetak").bind("click", function(event) {
					// cetak data pada area <div id="#data-mahasiswa"></div>
					$('#data-mahasiswa').printArea();
				});
			});
		}) (jQuery);
	</script>
    <style type="text/css">
    </style>
</head>

<body>

<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
    <button id="cetak" class="btn pull-right">Cetak</button>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
      <?php
          include "../config/koneksi.php";
          $id_disposisi = $_GET['id_disposisi'];
          $sql = mysqli_query($koneksi, "SELECT * FROM disposisi a JOIN surat_masuk b ON a.id_suratmasuk = b.id_suratmasuk
          WHERE a.id_disposisi = '$id_disposisi'");
      ?>
	    <div id="data-mahasiswa">
        <p><img src="kopFEB.jpg" width="1000"></p>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
            overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
            font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
            .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        </style>
            <?php while($data = mysqli_fetch_array($sql)) { ?>
        <table class="tg" align="center" width="925px">
            <colgroup>
            <col style="width: 168.2px">
            <col style="width: 114.2px">
            <col style="width: 164.2px">
            <col style="width: 111.2px">
            </colgroup>
            <thead>
            <tr>
                <th class="tg-c3ow" colspan="4"><span style="font-weight:bold">LAPORAN PERJALANAN DINAS<br>FAKULTAS EKONOMI DAN BISNIS UPR 2023</br> </span></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="tg-0pky" colspan="2"><b>Surat dari : </b><?php echo $data['asal_surat']; ?><br><b>No. Surat : </b><?php echo $data['no_surat']; ?><br><b>Tgl Surat : </b><?php echo $data['tanggal_surat']; ?></td>
                <td class="tg-0pky" colspan="2"><b>Diterima Tgl : </b><?php echo $data['tanggal_diterima']; ?><br><b>No. Agenda : </b><?php echo $data['no_agenda']; ?><br><b>Sifat : </b><?php echo $data['sifat']; ?></td>
            </tr>
            <tr>
                <td class="tg-0pky" colspan="4">Perihal : <?php echo $data['perihal']; ?></td>
            </tr>
            <tr>
                <td class="tg-0pky" colspan="2"><b>Diteruskan kepada Sdr : </b><?php echo $data['tujuan']; ?></td>
                <td class="tg-0pky" colspan="2"><b>Dengan hormat harap : </b><?php echo $data['penyelesaian']; ?></td>
            </tr>
            <tr>
                <td class="tg-0pky" colspan="4"><b>Catatan : </b><?php echo $data['catatan']; ?></td>
            </tr>
            <tr>
                <td class="tg-0pky" colspan="4"><b>Tanggal Disposisi : </b><?php echo $data['tanggal_disposisi']; ?></td>
            </tr>
            </tbody>
        </table>
            <?php } ?>
	  </div>
	</div>
</div>

</body>
</html>