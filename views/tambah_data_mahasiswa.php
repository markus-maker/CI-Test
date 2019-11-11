<?php
	echo form_open('Mahasiswa/kirim_data');	
	echo form_fieldset('Data Diri Mahasiswa');
	echo form_label('Nim Mahasiswa : ');
	echo form_input('nim');
	echo form_error('nim');
	echo "<br>";
	echo "<br>";
	echo form_label('Nama Mahasiswa : ');
	echo form_input('nama');
	echo form_error('nama');
	echo "<br>";
	echo "<br>";
	$options = array(
		'A' => 'Kelas A', 
		'B' => 'Kelas B',
	);
	echo form_label('Kelas : ');
	echo form_dropdown('kelas', $options);
	echo "<br>";
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_close();
?>
