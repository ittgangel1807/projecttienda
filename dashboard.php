<!DOCTYPE html>
<html>

<head>
	<title>Gráfica aleatoria</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
		canvas {
			display: block;
			margin: 0 auto;
			max-height: 15000px;
			max-width: 1000px;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>

<body>
	<h1>Gráfica de ventas</h1>
	<canvas id="myChart"></canvas>

	<?php
	// Generar datos aleatorios para los 6 productos
	$productos = array("A.NECTAR", "S.SMITHEREENS", "S.AVICII", "A.STORIES", "A.TRUE", "A.SMITHEREENS");
	$datos = array();
	for ($i = 0; $i < 6; $i++) {
		$datos[] = rand(50, 1000);
	}

	// Crear un arreglo de colores aleatorios
	$colores = array();
	for ($i = 0; $i < 6; $i++) {
		$colores[] = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
	}
	?>

	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($productos); ?>,
				datasets: [{
					label: 'Ventas por producto',
					data: <?php echo json_encode($datos); ?>,
					backgroundColor: <?php echo json_encode($colores); ?>
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</body>

</html>