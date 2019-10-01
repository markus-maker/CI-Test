<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Buku Prodi TI</title>
	<meta charset="utf-8">
		<style>
			table, tr, td {border: 1px solid black;
			}
		</style>
</head>
<body>
	<h1>Detail Buku</h1>
<table>
		<tr>
		<td>id</td>
		<td>judul_buku</td>
		<td>nama_pengarang</td>
		<td>nama_penerbit</td>
		<td>tahun_terbit</td>
		</tr>
	<?php
	$no = 1;
foreach ($data_buku as $value) {
	echo "<tr>";	
	echo "<td>".$no++."</td>";
	echo "<td>".$value->judul_buku."</td>";
	echo "<td>".$value->nama_pengarang."</td>";
	echo "<td>".$value->nama_penerbit."</td>";
	echo "<td>".$value->tahun_terbit."</td>";
	echo "</tr>";
	}
	 ?>
</table>
</body>
</html>