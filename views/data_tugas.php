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
	<?php
if (isset($data_tugas)) {	
	echo $data_tugas['id'];//pemanggil di db praktikum-ci dan tabel buku
	echo $data_tugas['judul_buku'];//pemanggil di db praktikum-ci dan tabel buku
	echo $data_tugas['nama_pengarang'];//pemanggil di db praktikum-ci dan tabel buku
	echo $data_tugas['nama_penerbit'];//pemanggil di db praktikum-ci dan tabel buku
	echo $data_tugas['tahun_terbit'];//pemanggil di db praktikum-ci dan tabel buku
	}
	 ?>
</body>
</html>