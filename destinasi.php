<!-- DESTINASI (CONTAINER DESTINASI) -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style/destinasi.css">
</head>

<body>

	<?php include 'header.php' ?>
	<br><br><br><br><br><br><br>
	<div class="tulisan-desti">
		<p class="p1">PORTFOLIO GALLERY</p><br>
		<h3>Destinasi Wisata Yang Pernah Di Kunjungi</h3>
	</div>

	<!-- PEGUNUNGAN -->
	<div class="box-destinasi">
		<div class="gambar-destinasi">
			<a href="detail_destinasi/pegunungan.php">
				<img src="img/gunung.jpg">
			</a>
		</div>


		<div class="kalimat-destinasi">
			<h3>PEGUNUNGAN</h3>
			<br>
			<p>Pesona alam pegunungan di Indonesia sudah tak perlu di ragukan lagi, jadi nunggu apa lagi? ayo berangkat</p>
			<br>
			<a href="detail_destinasi/pegunungan.php">
				<p class="biru">Selengkapnya</p>
			</a>
		</div>
	</div>

	<!-- PANTAI -->
	<div class="box-destinasi">

		<div class="kalimat-destinasi">
			<h3>PANTAI</h3>
			<br>
			<p>Pesona alam Pantai di Indonesia sudah tak perlu di ragukan lagi, jadi nunggu apa lagi? ayo berangkat</p>
			<br>
			<a href="detail_destinasi/pantai.php">
				<p class="biru">Selengkapnya</p>
			</a>
		</div>

		<div class="gambar-destinasi">
			<a href="detail_destinasi/pantai.php">
				<img src="detail_destinasi/pantai/pantai-baron-jogja.jpg">
			</a>
		</div>
	</div>

	
	<?php include'content-empat.php'; ?>
	<?php include "footer2.php"; ?>
</body>

</html>