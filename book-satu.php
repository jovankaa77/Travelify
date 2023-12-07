<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-satu{
			width: 80%;
			box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
				    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
				    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
				    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
				    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
			display: flex;
			justify-content: space-between;
			margin: 30px auto;
			padding: 20px;
			flex-wrap: wrap;
			box-sizing: border-box;
		}
		.gambar-book-satu{
			width: 47%;
		}
		.gambar-book-satu img{
			width: 100%;
		}
		.content-book-satu{
			width: 50%;
		}

		.box-content-satu{
			margin: 10px 0 0 0;
			display: flex;
			justify-content: space-between;
		}
		.kalimat-book-satu{
			margin: 0 0 0 20px;
		}
		.kalimat-book-satu h3{
			font-size: 20px;
		}
		.kalimat-book-satu p{
			font-size: 18px;
			margin: 15px 0 0 0;
		}
		@media(max-width: 800px){
			.gambar-book-satu{
				width: 100%;
			}
			.content-book-satu{
				width: 100%;
			}
			.box-content-satu img{
				width: 80px;
				height: 120px;
			}
		}
	</style>
</head>
<body>
	<div class="container-satu">
		<div class="gambar-book-satu">
			<img src="img/icon-satu.png">
		</div>

		<div class="content-book-satu">
			<div class="box-content-satu">
				
				<img src="img/wawasan.png" width="130px">
				<div class="kalimat-book-satu">
					<h3>Wawasan Yang Luas</h3>
					<p>Mempunyai wawasan yang luas siap memandu wisatawan kemanapun.</p>
				</div>

			</div>


			<div class="box-content-satu">
				
				<img src="img/skill1.png" width="130px">
				<div class="kalimat-book-satu">

					<h3>Rekomendasi Tempat</h3>
					<p>Merekomendasi tempat wisata yang menarik sesuai daerah yang di kunjungi</p>
				</div>

			</div>


			<div class="box-content-satu">
				
				<img src="img/informasi.png" width="130px">
				<div class="kalimat-book-satu">
					<h3>Memberi Informasi</h3>
					<p>Menemani, membimbing serta memberi informasi pada wisatawan yang tengah mengadakan kegiatan wisata.</p>
				</div>

			</div>
		</div>

	</div>

</body>
</html>