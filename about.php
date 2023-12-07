<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-about{
			width: 80%;
			display: flex;
			margin: 30px auto;
			/*border: 1px solid black;*/
			justify-content: space-between;
			flex-wrap: wrap;
		}
		.box-about{
			width: 27%;
			padding: 15px;
			box-sizing: border-box;
			box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
				    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
				    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
				    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
				    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
			text-align: center;
			margin: 30px auto;
		}
		.box-about.atas{
			/*width: 35%;*/
		}
		.box-about h3{
			font-size: 21px;
		}
		.box-about p{
			margin: 15px 0 0 0;
			font-size: 18px;
		}
		.kalimat-about{
			width: 80%;
			margin: 10px auto;
			text-align: center;
		}
		.kalimat-about h5{
			font-size: 18px;
			color: #4f46e5;
		}
		.kalimat-about h3{
			font-size: 45px;
			/*margin: -25px 0 0 0;*/
		}

		.biodata{
			width: 80%;
			margin: 30px auto;
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
		}
		.box-biodata{
			width: 45%;
			box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
				    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
				    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
				    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
				    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
			padding: 15px;
			box-sizing: border-box;
			text-align: center;

		}
		.box-biodata h4{
			font-size: 20px;
		}
		.box-biodata p{
			font-size: 18px;
			margin: 15px 0 0 0;
		}
		@media(max-width: 800px){
			.box-about{
				width: 100%;
				margin: 30px 0 0 0;
			}
			.kalimat-about h3{
				font-size: 30px;
				margin: -15px 0 0 0;
			}
			.box-biodata{
				width: 100%;
				margin: 30px 0 0 0;
			}
		}
	</style>
</head>
<body>
	<?php include 'header.php' ?>
	<br><br><br><br><br><br><br><br><br>
	<div class="kalimat-about">
		<h5>DESKRIPSI SELENGKAPNYA</h5>
		<br>
		<h3>Skills Dan Keterampiran Yang Dikuasai</h3>
	</div>
	<div class="container-about">
		<div class="box-about">
			<img src="img/mandarin1.png" width="200px" height="135px">
			<h3>Bahasa Mandarin</h3>
			<p>Menguasai bahasa Mandari secara aktif dan juga sudah terbiasa berkomunikasi dengan wisatawan mancanegara</p>
		</div>

		<div class="box-about atas">
			<img src="img/skill5.png" width="200px" height="135px">
			<h3>Social Skill Expert</h3>
			<p>terbiasa bercerita dan berbicara di depan rombongan wisatawan</p>
		</div>


		<div class="box-about">
			<img src="img/skill2.png" width="200px" height="135px">
			<h3>Pemahaman Sejarah</h3>
			<p>Memahami latar belakang sejarah destinasi wisata yang siap dikunjungi </p>
		</div>

		<div class="box-about">
			<img src="img/skill4.png" width="200px" height="135px">
			<h3>Time Keeper</h3>
			<p>Menguasai management waktu para wisatawan agar waktu berjalan dengan efisien </p>
		</div>

		<div class="box-about atas">
			<img src="img/skill3.png" width="200px" height="135px">
			<h3>Rasa Humor dan Improvisasi</h3>
			<p>Terbiasa mengubah suasana agar mengantisipasi rasa bosan selama menuju ke obyek wisata selanjutnya</p>
		</div>


		<div class="box-about">
			<img src="img/social1.png" width="200px" height="135px">
			<h3>Bahasa Inggris</h3>
			<p>Menguasai bahasa Inggris serta terbiasa berkomunikasi dengan wisatawan dari luar negeri</p>
		</div>
	</div>

	<div class="biodata">
		<div class="box-biodata">
			<img src="img/diri.png" width="200px" height="135px">
			<h4>Jovanka</h4>
			<p>18 Tahun</p>
			<p>Bandung, Jawa Barat</p>
		</div>

		<div class="box-biodata">
			<img src="img/univ.png" width="200px" height="135px">
			<h4>Lulusan Harvard University</h4>
			<p>Cambridge, Amerika Serikat</p>
			<p>VannesaAurellya@gmail.com</p>
		</div>
	</div>

	<?php include'book-satu.php'; ?>

	<?php include'content-empat.php'; ?>
    <?php include "footer2.php"; ?>
</body>
</html>