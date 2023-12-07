<!-- HOME (CONTAINER TIGA/ BLOG) -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		.container-tiga{
			width: 80%;
			padding: 20px;
			box-sizing: border-box;
			margin: 20px auto;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}
		.tiga-satu{
			width: 35%;
			height: 450px;
			position: relative;
			overflow: hidden;
		}

		.tiga-satu img{
			width: 100%;
			height: 100%;

			/*	Harus di absolute agar tulisan didalem img menyatu*/
			position: absolute;

		}

		/*TULISAN DI DALAM IMG*/
		
		.tulisan-img{
			position: absolute;
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
			/* SHADOW BACKGROUND PUTIH */
			background: linear-gradient(rgba(255, 255, 255, 0) 0%, rgba(250, 249, 252, 0.85) 25%) 0% 0% / cover, center center no-repeat;
			margin: 180px 0 0 0;
		}

		.tulisan-img2{
			position: absolute;
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
			/* SHADOW BACKGROUND PUTIH */
			background: linear-gradient(rgba(255, 255, 255, 0) 40%, rgba(250, 249, 252, 0.85) 55%) 0% 0% / cover, center center no-repeat;
			margin: -25px 0 0 0;
		}
		.tulisan-img3{
			position: absolute;
			text-align: center;
			padding: 20px;
			box-sizing: border-box;
			/* SHADOW BACKGROUND PUTIH */
			background: linear-gradient(rgba(255, 255, 255, 0) 40%, rgba(250, 249, 252, 0.85) 55%) 0% 0% / cover, center center no-repeat;
			margin: 210px 0 0 0;
		}


		/*	UKURAN BOX 	*/
		.tiga-dua{
			width: 30%;
			/*border: 1px solid black;*/
			position: relative;

		}
		.dua-img, .dua-img2{
			width: 100%;
			position: relative;
		}

		.dua-img img{
			width: 100%;
			position: absolute;
		}

		.tiga-tiga{
			width: 30%;
		}

		.dua-img2 img{
			width: 100%;
			position: absolute;
			margin: 225px 0 0 0;
		}

		.kalimat-tiga{
			width: 78%;
			margin: 20px auto;
			display: flex;
			justify-content: space-between;
		}
		.text-tiga p{
			color: grey;
		}
		.text-tiga h3 span{
			padding: 15px;
			box-sizing: border-box;
			background-color: #333;
			color: #fff;
		}
		h3{
			margin: 20px auto;
		}
		.see-tiga h3{
			padding: 20px;
			box-sizing: border-box;
			color: #FFFCFE;
			background-color: #BD9FF4;
			border-radius: 30px;
			transition: 0.8s;
		}

		.see-tiga h3:hover{
			padding: 25px;
		}
		@media(max-width: 800px){
			.tiga-satu{
				width: 100%;
			}
			.tiga-dua, .tiga-tiga{
				width: 100%;
				display: flex;
				flex-wrap: wrap;
			}
			.dua-img2 {
				margin: 200px 0 0 0;
				position: relative;
			}
			.dua-img {
				margin: 20px 0 0 0;
				position: relative;
			}
			.tulisan-img2{
				position: absolute;
			}
			.dua-img img{
				height: 223px;
			}
		}
	</style>
</head>
<body>
	<div class="kalimat-tiga">	
		<div class="text-tiga">
			<h3><span>BLOG</span> KAMI</h3>
			<p>Blog Mengenai tempat wisata di indonesia.</p>
		</div>
		<div class="see-tiga">
			<h3>Selengkapnya</h3>
		</div>
	</div>
	<div class="container-tiga">
		<div class="tiga-satu">
			<img src="img/blog4.jpg">
			<div class="tulisan-img">
				<br><br><br><br><br><br>
				<h3>Salah satu wisata destinasi yang sangat di nikmati adalah pemandangan alam</h3>
				
				<p>Pemandangan Alam Sudah Pasti Sekali Oleh Karena Itu Kami Merekomendasikan nya</p>
			</div>
				
			
		</div>

		<div class="tiga-dua">

			<div class="dua-img">
				<img src="img/blog1.jpg" height="223px" class="img-2">
				<br>
				<div class="tulisan-img2">
					<br><br><br>
					<br><br><br>
					<h3>Pesona Alam Bukit Sangat Cocok Untuk Destinasi Selanjutnya</h3>
					
				</div>
			</div>

			<div class="dua-img2">
				<img src="img/blog2.jpg" height="210px" class="img-2">
				<div class="tulisan-img3">
					<br><br><br>
					<br><br><br>
					<h3>Pesona Alam Pantai Sangat Cocok Untuk Destinasi Selanjutnya</h3>
					
				</div>
			</div>


		</div>
		<br><br><br><br><br>
		<div class="tiga-tiga">

			<div class="dua-img">
				<img src="img/blog3.jpg" height="223px" class="img-2">
				<br>
				<div class="tulisan-img2">
					<br><br><br>
					<br><br><br>
					<h3>Pesona Alam Pegunungan Sangat Cocok Untuk Destinasi Selanjutnya</h3>
					
				</div>
			</div>

			<div class="dua-img2">
				<img src="img/blog5.jpg" height="210px" class="img-2">
				<div class="tulisan-img3">
					<br><br><br>
					<br><br><br>
					<h3>Wisata manakah yang sangat menarik untuk destinasi selanjutnya?</h3>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>