<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.2.0-web/css/all.min.css">
	<style>
		*{
			margin: 0;
			/*padding: 0;*/
		}
		header{
			width: 100%;
			background-color: #fff;
			display: flex;
			justify-content: space-around;
			box-sizing: border-box;
			position: fixed;
			box-shadow: 0px 2px 5px grey;
			/*margin: 0px 0 0 0;*/
			padding: 10px;
			box-sizing: border-box;
			/*position: absolute;*/
			z-index: 100;
		}
		.logo-header{
			/*border: 1px solid black;*/
			height: 90px;
			width: 10%;
		}
		.logo-header img{
			width: 100%;
			height: 100%;
		}
		.nav-header{
			margin: 30px 0 0 0;
		}

		.nav-header a{
			font-size: 20px;
			text-decoration: none;
			margin: 0 0 0 15px;
			transition: 0.8s;
			color: #333;
		}

		.nav-header a:hover{
			color: white;
			padding: 5px;
			box-sizing: border-box;
			background-color: #333;
			border-radius: 10px;
		}

		@media(max-width: 800px){
			header{
				display: inline-block;
			}
			.logo-header{
				width: 30%;
				margin: auto;
			}
			.nav-header{
				text-align: center;
				margin: 2px 0 0 0;
			}
		}

	</style>
</head>
<body>
	<header>
		<div class="logo-header">
			<img src="img/logo-satu.png" >
		</div>

		<div class="nav-header">
			<a href="index.php">Home</a>
			<a href="about.php">About</a>
			<a href="destinasi.php">Gallery</a>
			<a href="kontak.php">Contact</a>
		</div>
	</header>
</body>
</html>