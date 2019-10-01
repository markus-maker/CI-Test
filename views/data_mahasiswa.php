<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mahasiswa Prodi TI</title>
	<meta charset="utf-8">
		<style>
			table, tr, td {border: 1px solid black;
			}
		</style>
</head>
<body>
	<h1>Detail Mahasiswa Prodi TI Semester 1</h1>
<table>
		<tr>
		<td>No</td>
		<td>Nim</td>
		<td>Nama</td>
		<td>Kelas</td>
		</tr>
	<?php
	$no = 1;
foreach ($data_mahasiswa as $value) {
	echo "<tr>";	
	echo "<td>".$no++."</td>";
	echo "<td>".$value->nim."</td>";
	echo "<td>".$value->nama."</td>";
	echo "<td>".$value->kelas."</td>";
	echo "</tr>";
	}
	 ?>
</table>
</body>
</html>