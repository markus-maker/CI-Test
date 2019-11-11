<?php
	echo form_open('Uts/kirim_data');	
	echo form_fieldset('Data Peserta');
	echo form_label('ID : ');
	echo form_input('id');
	echo form_error('id');
	echo "<br>";
	echo "<br>";
	echo form_label('Nama : ');
	echo form_input('nama');
	echo form_error('nama');
	echo "<br>";
	echo "<br>";
	echo form_label('Alamat : ');
	echo form_input('alamat');
	echo form_error('alamat');
	echo "<br>";
	echo "<br>";
	echo form_label('Email : ');
	echo form_input('email');
	echo form_error('email');
	echo "<br>";
	echo "<br>";
	echo form_label('No Telfon : ');
	echo form_input('no_telfon');
	echo form_error('no_tefon');
	echo "<br>";
	$options = array(
		'A' => 'admin', 
		'B' => 'pengguna',
	);
	echo "<br>";
	echo "<br>";
	echo form_label('Status : ');
	echo form_dropdown('kelas', $options);
	echo "<br>";
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_close();
?>
