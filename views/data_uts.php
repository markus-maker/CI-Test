<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Peserta Himatekom</title>
	<meta charset="utf-8">
		<style>
			table, tr, td {border: 1px solid black;
			}
		</style>
</head>
<body>
	<h1>Daftar Peserta Himatekom</h1>
	<?php
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('No' , 'Nama' , 'Alamat' , 'Email' , 'No Telpon',  'Status' , 'Update' , 'Hapus');		
	$no = 1;
	foreach ($data_uts as $sf) :
		$this->table->add_row($sf->id, $sf->nama, $sf->alamat, $sf->email, $sf->no_telfon, $sf->status, anchor('Uts/ambil_data_diri/'.
		$sf->id,'Edit'), anchor('Uts/hapus/'.$sf->id,'Hapus'));
	endforeach;
	if($this->session->flashdata('success')){
		echo $this->session->flashdata('success')."<br><br>";
	}
	echo $this->table->generate();
	 ?>
</body>
</html>