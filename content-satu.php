
<!-- HOME (CONTAINER SATU) -->

<!DOCTYPE html>
<html>
<head>
	<title>FIGHT COVID</title>
	<link rel="stylesheet" href="css/content-satu.css">
	<style>
		* {
  margin: 0;
  padding: 0;
}

.container-satu {
  width: 80%;
  margin: 120px auto;
  display: flex;
  padding: 30px;
  box-sizing: border-box;
  justify-content: space-between;
  background-color: #fff;
  border-radius: 20px;
  /*BAYANGAN SHADOW*/
  box-shadow: 0 0.9px 3.2px rgba(0, 0, 0, 0.001),
    0 2.1px 7.1px rgba(0, 0, 0, 0.002), 0 3.5px 12.1px rgba(0, 0, 0, 0.004),
    0 5.4px 18.7px rgba(0, 0, 0, 0.006), 0 8.1px 27.7px rgba(0, 0, 0, 0.01),
    0 11.8px 40.7px rgba(0, 0, 0, 0.014), 0 17.7px 60.9px rgba(0, 0, 0, 0.02),
    0 28.3px 97.1px rgba(0, 0, 0, 0.033), 0 53px 182px rgba(0, 0, 0, 0.07);
}

/* GAMBAR KIRI */
.gambar-kiri {
  width: 30%;
}
.gambar-kiri img {
  width: 100%;
}

/* TENGAH  */
.tengah-satu {
  width: 40%;
  display: flex;
}
.flex-tengah-satu {
  text-align: center;
  margin: auto;
}

.flex-tengah-satu h2 {
  font-size: 42px;
  font-weight: bold;
}

/* ANIMATION VIRUS */
.flex-tengah-satu img {
  width: 150px;
  animation: rotation 10s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

/* gambar kanan */
.gambar-kanan {
  width: 30%;
}
.gambar-kanan img {
  width: 100%;
}

@media (max-width: 600px) {
  .container-satu {
    margin: 1px auto;
    display: flex;
  }
  .tengah-satu {
    margin: auto;
  }
  .flex-tengah-satu img {
    width: 150px;
  }
  .flex-tengah-satu h2 {
    position: absolute;
    margin: 10px 0 0 -50px;
    font-size: 25px;
  }
  .flex-tengah-satu p {
    font-size: 18px;
    margin: 60px 0 0 0;
  }

  .flex-tengah-satu img {
    width: 120px;
  }
  .gambar-kiri {
    display: none;
  }
}

	</style>
</head>
<body>
	<div class="container-satu">
		<div class="gambar-kiri">
			<img src="img/kiri.png" >
		</div>
		<div class="tengah-satu">
			<div class="flex-tengah-satu">
				<img src="img/bumi.png">
				<br><br>
				<h2>Keberagaman Budaya <br>Negara Indonesia</h2>
				<br>
				<p>Keindahan budaya di indonesia <br> serta pesona alamnya</p>
				<br><br>
			</div>
		</div>
		<div class="gambar-kiri">
			<img src="img/kanan.png" >
		</div>
	</div>

</body>
</html>