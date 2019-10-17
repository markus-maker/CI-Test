<?php
	echo form_open('Akun/kirim_akun');	
	echo form_fieldset('Data Akun Mahasiswa');
	echo form_label('Username : ');
	echo form_input('username');
	echo "<br>";
	echo "<br>";
	echo form_label('Password : ');
	echo form_input('password');
	echo "<br>";
	echo "<br>";
	$options = array(
		'Aktif' => 'Aktif', 
		'Tidak Aktif' => 'Tidak Aktif',
	);
	echo form_label('Status : ');
	echo form_dropdown('status', $options);
	echo "<br>";
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_close();
?>
