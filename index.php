<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.body-vv{
			/*margin: -30px 0 0 0 ;*/
		}
		.container-home{
			width: 80%;
			padding: 20px;
			margin: 30px auto;
			box-sizing: border-box;
			/*border: 1px solid black;*/
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
		}
		.home-kiri{
			width: 50%;
			padding: 20px;
			box-sizing: border-box;
			/*margin: -35px 0 0 0;*/
		}
		.home-kiri h5{
			color: #4f46e5;
			font-size: 18px;
		}
		.home-kiri h2{
			font-size: 41px;
			margin: 0 0 15px 0 ;
		}
		.home-kiri h2 span{
			color: #4f46e5;
		}
		.home-kiri h2 span .lib{
			color: purple;
		}
		.home-kiri p{
			/*margin: -15px 0 0 0;*/
			font-size: 18px;
		}
		.home-kiri1 a{
			margin: 0 0 10px 0;
			text-decoration: none;
			/*border: 1px solid black;*/
			border-radius: 15px;
			box-shadow: 2px 2px 5px grey;
			background-color: #4f46e5;
			color: white;
			padding: 10px;
			box-sizing: border-box;		
			transition: 0.8s;
		}
		.home-kiri1 a:hover{
			background-color: #333;
			color: #fff;
		}
		.home-kanan{
			width: 50%;
			/*border: 1px solid black;*/
		}
		.home-kanan img{
			width: 100%;
			/*height: 100%;*/
		}

		

		@media(max-width :950px){
			.home-kanan{
				display: none;
			}
			.home-kiri h2, h5 , p{
				/*font-size: 32px;*/
				text-align: center;
			}
			.home-kiri h2{
				font-size: 28px;
			}
			.home-kiri h5{
				font-size: 16px;
			}
			.home-kiri .home-kiri1{
				width: 100%;
				display: flex;
			}
			.home-kiri .home-kiri1 a{
				width: 100%;
				text-align: center;
				border: 1px solid blue;
			}
			.home-kiri{
				width: 100%;
			}
			.pembatas{
				margin: 500px 0 0 0;
			}
		}
	</style>
</head>
<body class="body-vv">
	<?php include 'header.php' ?>
	<br><br><br><br><br>
	<div class="container-home">
		<div class="home-kiri">
			<h5>TOUR GUIDE</h5><br>
			<h2>Hii, I'm Jovanka Alexandro Tour <span>Guide<span class="lib"> Profes</span>ional</span>  Destinasi Wisata Indonesia</h2>
			<p>Nikmati liburan anda bersama Tour Guide dan kami pastikan kenyamanan serta keamanan anda terjamin. pililah destinasi Wisata selanjutnya dan jangan lewatkan setiap detiknya</p>
			<br><br>
			<div class="home-kiri1">
				<a href="">Info Lebih Lanjut</a>
			</div>
		</div>

		<div class="home-kanan">
			<img src="peta.png">
		</div>
	</div>

	

	<?php include'content-tiga.php'; ?>
	<?php include'content-satu.php'; ?>
	<?php include'content-dua.php'; ?>
	<div class="pembatas"></div>
	<?php include'content-empat.php'; ?>
	<?php include'footer2.php'; ?>
</body>
</html>