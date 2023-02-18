<!DOCTYPE html>
<html>

<head>
	<title>Ticket de Compra</title>
	<style>
		.box {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		body {
			font-family: 'Times New Roman', Times, serif, sans-serif;
			padding: 25px;
			
		}

		h1,
		h2,
		h3 {
			text-align: center;
		}

		table {
			border-collapse: collapse;
			margin: 10px 0;
			width: 50%;
		}

		table th,
		table td {
			border: 5px solid #000000;
			padding: 8px;
			text-align: center;
		}

		table th {
			background-color: #F79755;
		}
		table td {
			background-color: #C2E2EA;
		}

		.total {
			font-weight: bold;
			
		}
	</style>
</head>

<body>
	<h1>Ticket de Compra</h1>
	<h2>Resumen de Compra</h2>
	<h3>Gracias por su compra compra!!</h3>
	<form class="box">
		<table>
			<tr>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Precio Unitario</th>
				<th>Subtotal por producto</th>
			</tr>
			<?php
			// Recibimos los valores del formulario
			$producto1 = $_POST['producto1'];
			$producto2 = $_POST['producto2'];
			$producto3 = $_POST['producto3'];
			$producto4 = $_POST['producto4'];
			$producto5 = $_POST['producto5'];
			$producto6 = $_POST['producto6'];

			// Definimos el precio de cada producto
			$precio1 = 300;
			$precio2 = 650;
			$precio3 = 350;
			$precio4 = 380;
			$precio5 = 400;
			$precio6 = 560;

			// Calculamos el subtotal y el total
			$subtotal = $producto1 * $precio1 + $producto2 * $precio2 + $producto3 * $precio3 + $producto4 * $precio4 + $producto5 * $precio5 + $producto6 * $precio6;
			$iva = $subtotal * 0.16; // IVA del 16%
			$total = $subtotal + $iva;

			// Mostramos los detalles de la compra en una tabla
			if ($producto1 != 0) {
				echo "<tr><td>ALBUM TRUE</td><td>$producto1</td><td>$$precio1</td><td>$" . ($producto1 * $precio1) . "</td></tr>";
			}
			if ($producto2 != 0) {
				echo "<tr><td>SUDADERA JOJI</td><td>$producto2</td><td>$$precio2</td><td>$" . ($producto2 * $precio2) . "</td></tr>";
			}
			if ($producto3 != 0) {
				echo "<tr><td>ALBUM STORIES</td><td>$producto3</td><td>$$precio3</td><td>$" . ($producto3 * $precio3) . "</td></tr>";
			}
			if ($producto4 != 0) {
				echo "<tr><td>ALBUM SMITHEREENS</td><td>$producto4</td><td>$$precio4</td><td>$" . ($producto4 * $precio4) . "</td></tr>";
			}
			if ($producto5 != 0) {
				echo "<tr><td>SUDADERA AVICII</td><td>$producto5</td><td>$$precio5</td><td>$" . ($producto5 * $precio5) . "</td></tr>";
			}
			if ($producto6 != 0) {
				echo "<tr><td>ALBUM NECTAR</td><td>$producto6</td><td>$$precio6</td><td>$" . ($producto6 * $precio6) . "</td></tr>";
			}
			if ($subtotal != 0 && $total != 0) {
		
				echo "<tr><td> SUBTOTAL DE COMPRA </td><td>$$subtotal</td>";
				echo "<tr><td> IVA 16% </td><td>$$iva</td>";
				echo "<tr><td>Total </td><td> $$total</td>";
			}

			?>
	</form>
</body>

</html>