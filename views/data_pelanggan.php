<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pelanggan Toko</title>
	<meta charset="utf-8">
		<style>
			table, tr, td {border: 1px solid black;
			}
		</style>
</head>
<body>
	<h1>Daftar Pelanggan Toko Bharina</h1>
<table>
		<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>No HP</td>
		</tr>
	<?php
	$no = 1;
foreach ($data_pelanggan as $value) {
	echo "<tr>";	
	echo "<td>".$no++."</td>";
	echo "<td>".$value->nama_pelanggan."</td>";
	echo "<td>".$value->alamat."</td>";
	echo "<td>".$value->no_hp."</td>";
	echo "</tr>";
	}
	 ?>
</table>
</body>
</html>