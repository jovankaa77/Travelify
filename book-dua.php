<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-destinasi-book-dua{
			width: 80%;
			margin: 20px auto;
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
		}
		.book-destinasi-dua{
			width: 45%;
			margin: 30px 0 0 0;
			/*border: 1px solid black;*/
			transition: 0.8s;
			box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
				    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
				    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
				    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
				    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
			border-top-left-radius: 20px;
			border-top-right-radius: 20px;
			overflow: hidden;
		}
		.book-destinasi-dua:hover{
			background-color: #f2f2f2;
		}
		.img-book-dua{
			width: 100%;
		}
		.img-book-dua img{
			width: 100%;
			height: 230px;
		}
		.kalimat-book-dua{
			padding: 20px;
			box-sizing: border-box;
		}
		.tombol-dua{
			width: 100%;
			background-color: #4f46e5;
			border-radius: 30px;
			color: white;
			height: 35px;
			margin: 15px 0 0 0;
			box-shadow: 2p 2p 7px grey;
		}
		.kalimat-book-dua{
			width: 80%;
			margin: auto;
		}
		.kalimat-book-dua h5{
			font-size: 18px;
			color: #4f46e5;
		}
		.kalimat-book-dua h3{
			font-size: 48px;
			margin: -15px 0 0 0;
		}
		.kalimat-book-dua h2{
			font-size: 30px;
		}
		.kalimat-book-dua p{
			margin: 15px 0 0 0;
			font-size: 18px;
		}
		.icon-book-dua{
			margin: 15px 0 0 0;
			width: 100%;
			display: flex;
			justify-content: space-around;
		}
		.lokasi, .duid{
			display: flex;
		}
		.lokasi p , .duid p{
			font-size: 18px;
			margin:10px 0 0 10px;
		}

		@media(max-width: 800px){
			.book-destinasi-dua{
				width: 100%;
			}

			.kalimat-book-dua h5{
				font-size: 16px;
			}
			.kalimat-book-dua h3{
				font-size: 28px;
			}
		}
	</style>
</head>
<body>
	<div class="kalimat-book-dua">
		<h5>REKOMENDASI DESTINASI</h5>
		<br>
		<h3>Rekomendasi Tempat Wisata</h3>
	</div>
	<div class="container-destinasi-book-dua">
		<div class="book-destinasi-dua">
			<div class="img-book-dua">
				<img src="img/gunung.jpg">
			</div>
			<div class="icon-book-dua">
				<div class="lokasi">
					<img src="img/lokasi.png" width="23px" height="32px"> <p> Karawang</p>
				</div>
				<div class="duid">
					<img src="img/duid.png" width="23px" height="35px"> <p> Rp. 300.000,00</p>
				</div>
			</div>
			<div class="kalimat-book-dua">
				<h2>Stone Garden</h2>
				<p>Rasakan liburan anda semakin meriah bersama Travelify. Beli tiket di Travelify sudah termasuk biaya transportasi, penginapan dan juga destinasi wisata yang anda pilih. Jadi tunggu apa lagi? order sekarang juga </p>
				<button class="tombol-dua">Beli Tiket</button>
			</div>
		</div>

		<div class="book-destinasi-dua">
			<div class="img-book-dua">
				<img src="img/gunung.jpg">
			</div>
			<div class="icon-book-dua">
				<div class="lokasi">
					<img src="img/lokasi.png" width="23px" height="32px"> <p> Karawang</p>
				</div>
				<div class="duid">
					<img src="img/duid.png" width="23px" height="35px"> <p> Rp. 300.000,00</p>
				</div>
			</div>
			<div class="kalimat-book-dua">
				<h2>Stone Garden</h2>
				<p>Rasakan liburan anda semakin meriah bersama Travelify. Beli tiket di Travelify sudah termasuk biaya transportasi, penginapan dan juga destinasi wisata yang anda pilih. Jadi tunggu apa lagi? order sekarang juga </p>
				<button class="tombol-dua">Beli Tiket</button>
			</div>
		</div>

		<div class="book-destinasi-dua">
			<div class="img-book-dua">
				<img src="img/gunung.jpg">
			</div>
			<div class="icon-book-dua">
				<div class="lokasi">
					<img src="img/lokasi.png" width="23px" height="32px"> <p> Karawang</p>
				</div>
				<div class="duid">
					<img src="img/duid.png" width="23px" height="35px"> <p> Rp. 300.000,00</p>
				</div>
			</div>
			<div class="kalimat-book-dua">
				<h2>Stone Garden</h2>
				<p>Rasakan liburan anda semakin meriah bersama Travelify. Beli tiket di Travelify sudah termasuk biaya transportasi, penginapan dan juga destinasi wisata yang anda pilih. Jadi tunggu apa lagi? order sekarang juga </p>
				<button class="tombol-dua">Beli Tiket</button>
			</div>
		</div>

		<div class="book-destinasi-dua">
			<div class="img-book-dua">
				<img src="img/gunung.jpg">
			</div>
			<div class="icon-book-dua">
				<div class="lokasi">
					<img src="img/lokasi.png" width="23px" height="32px"> <p> Karawang</p>
				</div>
				<div class="duid">
					<img src="img/duid.png" width="23px" height="35px"> <p> Rp. 300.000,00</p>
				</div>
			</div>
			<div class="kalimat-book-dua">
				<h2>Stone Garden</h2>
				<p>Rasakan liburan anda semakin meriah bersama Travelify. Beli tiket di Travelify sudah termasuk biaya transportasi, penginapan dan juga destinasi wisata yang anda pilih. Jadi tunggu apa lagi? order sekarang juga </p>
				<button class="tombol-dua">Beli Tiket</button>
			</div>
		</div>

		
		
	</div>
</body>
</html>