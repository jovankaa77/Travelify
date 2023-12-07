<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.container-kontak{
			width: 80%;
			display: flex;
			justify-content: space-around;
			background-color: #fff;
			box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
				    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
				    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
				    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
				    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
			margin: 30px auto;
			flex-wrap: wrap;
		}

		.kiri-kontak{
			width: 45%;
		}
		.kiri-kontak img{
			width: 100%;
		}
		.kanan-kontak{
			width: 45%;
			display: flex;
		}
		.tengah-kontak{
			margin: auto;
		}
		.tengah-kontak button{
			width: 100%;
			background-color: #4f46e5;
			border-radius: 20px;
			color: #fff;
			transition: .8s;
		}

		.tengah-kontak button:hover{
			background-color: #333;
		}

		.tulisan-desti{
		    text-align: center;
		    margin: 20px auto;
		    width: 80%;
		    padding: 10px;
		    font-family: 'opensans';
		}
		.tulisan-desti h3{
		    font-size: 48px;
		    margin: 0 0 9px 0;
		    font-family: 'opensans';
		}
		.tulisan-desti .p2{
		    font-family: 'opensans';
		}
		.tulisan-desti .p1{
		    font-size: 18px;
		    color: rgb(21, 1, 229);
		    font-weight: bold;
		    font-family: 'opensans';
		}
		@media(max-width: 800px){
			.tulisan-desti h3{
		        font-size: 36px;
		    }
		    .tulisan-desti .p2{
		        font-size: 13px;
		    }
		    .kiri-kontak{
		    	width: 100%;
		    }
		    .kanan-kontak{
		    	width: 100%;
		    }
		}
	</style>
</head>
<body>

	<?php include 'header.php' ?>
	<br><br><br><br><br><br><br>

	<div class="tulisan-desti">
		<p class="p1">DESKRIPSI KONTAK</p><br>
		<h3>Silahkan hubungi kontak dibawah ini</h3>
	</div>

	<div class="container-kontak">
		<div class="kiri-kontak">
			<img src="img/skill2.png">
		</div>

		<div class="kanan-kontak">
			<div class="tengah-kontak">
				<table>
					<tr>
						<td>Nama Lengkap : </td>
						<td><input type="text" name="" placeholder="Input Nama Lengkap.."></td>
					</tr>

					<tr>
						<td></td>
						<td><br></td>
					</tr>

					<tr>
						<td>Email : </td>
						<td><input type="text" name="" placeholder="Input Email"></td>
					</tr>

					<tr>
						<td></td>
						<td><br></td>
					</tr>

					<tr>
						<td>Catatan :  </td>
						<td><textarea placeholder="Input Catatan.."></textarea></td>
					</tr>

					<tr>
						<td></td>
						<td><br></td>
					</tr>

					<tr>
						<td></td>
						<td><button>Kirim</button></td>
					</tr>
				</table>
				<br>
				 
				<br>
				
			</div>
		</div>
	</div>
	
	<?php include'content-empat.php'; ?>
    <?php include "footer2.php"; ?>
</body>
</html>