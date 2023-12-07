<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		/*@font-face{
    		src: url(font/caslonbold.otf);
    		font-family: 'caslon';
		}
		@font-face{
			src: url(font/OpenSansRegular.ttf);
			font-family: 'opensans';
		}
*/
		/*	TULISAN AWAL */
		
		.tulisan-yt{
			text-align: center;
			margin: 20px auto;
			width: 80%;
			padding: 10px;
			font-family: 'opensans';
		}
		.tulisan-yt h3{
			font-size: 48px;
			margin: 0 0 9px 0;
			font-family: 'opensans';
			font-weight: bold;
		}
		.tulisan-yt .p2{
			font-family: 'opensans';
			font-size: 18px;
		}
		.tulisan-yt .p1{
			font-size: 18px;
			color: rgb(21, 1, 229);
			font-weight: bold;
			font-family: 'opensans';
		}

		/*	GAMBAR*/
		.content-dua{
			display: flex;
			width: 80%;
			margin: 30px auto;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.gambar-dua{
			width: 40%;
		}
		.gambar-dua img{
			width: 100%;
		}

		/*	KALIMAT  */
		.kalimat-dua{
			width: 50%;
			display: flex;
		}
		.flex-dua{
			margin: auto;
		}
		.flex-dua .p1{
			font-size: 18px;
			color: rgb(21, 1, 229);
			font-weight: bold;
			font-family: 'opensans';
			text-decoration: none;
		}

		.flex-dua .p2{
			font-size: 18px;
			font-family: 'opensans';
		}
		.flex-dua h3{
			font-size: 45px;
			margin: 0 0 9px 0;
			font-family: 'opensans';
		}

		@media(max-width: 800px){
			.tulisan-yt h3{
				font-size: 36px;
			}
			.tulisan-yt .p2{
				font-size: 13px;
			}
			.gambar-dua{
				width: 100%;
			}
			.kalimat-dua{
				width: 100%;
			}
			.flex-dua{
				text-align: center;
			}

			.flex-dua h3{
				font-size: 25px;
				margin: 0 0 9px 0;
				font-family: 'opensans';
			}
		}
	</style>
</head>
<body>
	<br><br>
	<div class="tulisan-yt">
			<p class="p1">KHARISMA INDONESIA </p>
			<h3>Temukan Keindahan Di Negara Indonesia</h3>
			<p class="p2">Nikmati berbagai macam budaya, keberagaman, kuliner dan keindahan alam yang membuat-mu jatuh cinta <br>dan menjadikan Indonesia  sebagai destinasi-mu selanjutnya</p>
	</div>
<br>
<!-- TARIAN -->
	<div class="content-dua">
		<div class="gambar-dua">
			<img src="img/destinasi-satu.png" >
		</div>

		<div class="kalimat-dua">
			<div class="flex-dua">
				<p class="p1">KEBERAGAMAN INDONESIA </p>
				<br>
				<h3>Keberagaman budaya yang bisa anda nikmati hanya di Indonesia!</h3>
				<p class="p2">Beragam budaya bisa kalian temukan di Indonesia. Mulai dari Bahasa Daerah, Tari Tradisional, Senjata Traditional, Baju Daerah dan Lagu Daerah yang bisa kalian nikmati di Indonesia yang kaya akan budaya dan keberagamanya.</p>
				<br>
				<a href="index.php" class="p1">Selengkapnya --></a>
			</div>
		</div>
	</div>
<br>
<!-- WISATA -->
	<div class="content-dua">

		<div class="kalimat-dua">
			<div class="flex-dua">
				<p class="p1">PESONA INDONESIA </p>
				<br>
				<h3>Pesona alam yang di akui Dunia yang bisa kamu liat di Indonesia!</h3>
				<p class="p2">Pesona alam yang dimiliki Indonesia membuatnya diakui dunia sebagai negara terindah di dunia. Memiliki Pantai, Gunung, Tempat Bersejarah dan Wahana Atraksi yang ada di Indonesia yang siap kalian kunjungi kapan saja.</p>
				<br>
				<a href="index.php" class="p1">Selengkapnya --></a>
			</div>
		</div>


		<div class="gambar-dua">
			<img src="img/destinasi-dua.png" >
		</div>
	</div>

<br>
</body>
</html>