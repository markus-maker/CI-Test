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
	<?php
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('No' , 'Nim' , 'Nama' , 'Kelas' , 'Aksi');		
	$no = 1;
	foreach ($data_mahasiswa as $sf) :
		$this->table->add_row($no++, $sf->nim, $sf->nama, $sf->kelas, anchor('Mahasiswa/ambil_data_diri/'.
		$sf->id,'Edit'));
	endforeach;
	if($this->session->flashdata('success')){
		echo $this->session->flashdata('success')."<br><br>";
	}
	echo $this->table->generate();
	 ?>
</body>
</html>