<!-- HOME (CONTAINER EMPAT) -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		@font-face{
    		src: url(font/caslonbold.otf);
    		font-family: 'caslon';
		}
		@font-face{
			src: url(font/OpenSansRegular.ttf);
			font-family: 'opensans';
		}
		.container-empat{
			width: 80%;
			margin: 30px auto;
			background: linear-gradient(152.03deg,rgba(203,176,255,.9) 18.75%,rgba(169,126,255,.9) 132.08%),
						url(img/img.png) no-repeat 50%;
    		background-size: cover;
			text-align: center;
			height: 300px;
			border-radius: 30px;
			display: flex;
			box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
				    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
				    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
				    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
				    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
		}
		.flex-empat{
			width: 100%;
			margin: auto;
		}
		.container-empat h3{
			color: #fff;
			font-weight: bold;
			margin: auto;
			font-size: 35px;
			font-family: 'opensans';
		}
		.container-empat .tombol{
			background-color: #F0E8FD;
			padding: 10px;
			width: 15%;
			box-sizing: border-box;
			color: #73688A;
			border-radius: 15px;
			font-size: 23px;
			font-family: 'opensans';
			transition: 0.8s;
		}
		.container-empat .tombol:hover{
			padding: 15px;
		}

		@media(max-width: 800px){
			.container-empat{
				margin: 5px 0 0 50px ;
			}
			.container-empat h3{
				font-size: 23px;
			}
			.container-empat .tombol{
				width: 70%;
			}
		}

	</style>
</head>
<body>
	<div class="container-empat">
		<div class="flex-empat">
			<h3>Temukan Berbagai Keberagaman <br> Di Negara Indonesia</h3>
			<br>
			<button class="tombol">EXPLORASI</button>
		</div>
	</div>
	<br>
	<br>
	<br>
</body>
</html>