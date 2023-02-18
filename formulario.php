<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Tienda</title>
	<style>
		.box {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		h1,
		h2 {
			text-align: center;
			margin-top: 25px;
			font-size: 2.5rem;
			text-transform: uppercase;
		}

		form {
			max-width: 900px;
			margin: 0 auto;
		}

		.card {
			margin-bottom: 30px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border: none;
		}

		.card img {
			height: 300px;
			object-fit: cover;
			object-position: center;
		}

		.card-body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.card-body label {
			font-size: 1.5rem;
			margin-bottom: 10px;
		}

		.card-body p {
			font-size: 1.2rem;
			margin-bottom: 10px;
		}

		.card-body input {
			margin-top: 10px;
			width: 100px;
			font-size: 1.2rem;
			text-align: center;
		}

		.btn {
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 1.2rem;
			cursor: pointer;
		}

		.btn:hover {
			background-color: #0069d9;
		}
	</style>
</head>

<body>
	<h1>Tienda</h1>
	<h2>Seleccione sus productos a comprar!</h2>
	<form class="box" action="procesar.php" method="POST">

		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="https://media.karousell.com/media/photos/products/2022/10/12/avicii__true_vinyl_lp_1665568757_3581f39f.jpg" alt="...">
							<div class="card-body">
								<label for="producto1"><span>ALBUM TRUE</span></label>
								<p class="card-text">Album True (2013) de avicii a $300 MXN </p>
								<input type="number" name="producto1" id="producto1" value="0" min="0"><br>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://cdn.shopify.com/s/files/1/0657/7822/1283/products/jojigreylongsleeve.png?v=1671216675&width=823" alt="...">
							<div class="card-body">
								<label for="producto2"><span>SUDADERA</span></label>
								<p class="card-text">Sudadera SMITHEREENS de joji a $650 MXN </p>
								<input type="number" name="producto2" id="producto2" value="0" min="0"><br>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://ae01.alicdn.com/kf/Sa18d39f9f28143d3a9969f9960c99de0a/GX784-Avicii-Stories-Music-Album-Tracklist-Cover-Poster-Prints-Canvas-Painting-Wall-Art-Picture-Living-Room.jpg_640x640.jpg" alt="...">
							<div class="card-body">
								<label for="producto3"><span>ALBUM STORIES</span></label>
								<p class="card-text">Album Stories (2015) de avicii a $350 MXN</p>
								<input type="number" name="producto3" id="producto3" value="0" min="0"><br>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://cdn.shopify.com/s/files/1/0657/7822/1283/products/SMITHEREENS_D2C_Exclusive_Vinyl_FULL_001_1.png?v=1667930432&width=823" alt="...">
							<div class="card-body">
								<label for="producto4"><span>ALBUM SMITHEREENS</span></label>
								<p class="card-text">Album Smithereens (2022) de joji a $380 MXN</p>
								<input type="number" name="producto4" id="producto4" value="0" min="0"><br>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://ae01.alicdn.com/kf/H8a39608d72a94b2b9683221c0e6c8e0as/Sudadera-con-capucha-de-Dj-Avicii-para-hombre-y-mujer-ropa-con-estampado-Rip-Avicii-para.jpg_Q90.jpg_.webp" alt="...">
							<div class="card-body">
								<label for="producto5"><span>SUDADERA</span></label>
								<p class="card-text">Sudadera de avicii a $400 MXN </p>
								<input type="number" name="producto5" id="producto5" value="0" min="0"><br>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="https://cdn.shopify.com/s/files/1/0105/4542/products/joji-nectar-ttlexclusive-1_1000x1000.jpg?v=1623956799" alt="...">
							<div class="card-body">
								<label for="producto6"><span>ALBUM</span></label>
								<p class="card-text">Album Nectar (2020) de joji a $560 MXN</p>
								<input type="number" name="producto6" id="producto6" value="0" min="0"><br>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="btn">COMPRAR</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>

</html>