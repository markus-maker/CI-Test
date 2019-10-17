<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Akun Mahasiswa</title>
	<meta charset="utf-8">
		<style>
			table, tr, td {border: 1px solid black;
			}
		</style>
</head>
<body>
	<h1>Detail Akun Mahasiswa Prodi TI B</h1>
<table>
		<tr>
		<td>No</td>
		<td>Username</td>
		<td>Password</td>
		<td>Status</td>
		</tr>
	<?php
	$no = 1;
foreach ($data_akun as $value) {
	echo "<tr>";	
	echo "<td>".$no++."</td>";
	echo "<td>".$value->username."</td>";
	echo "<td>".$value->password."</td>";
	echo "<td>".$value->status."</td>";
	echo "</tr>";
	}
	 ?>
</table>
</body>
</html>