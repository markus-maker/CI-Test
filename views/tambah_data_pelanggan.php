<?php
	echo form_open('Pelanggan/kirim_pelanggan');	
	echo form_fieldset('Pelanggan Tetap Toko Bharina');
	echo form_label('Nama : ');
	echo form_input('nama_pelanggan');
	echo "<br>";
	echo "<br>";
	echo form_label('ID : ');
	echo form_input('id_pelanggan');
	echo "<br>";
	echo "<br>";
	echo form_label('Alamat : ');
	echo form_input('alamat');
	echo "<br>";
	echo "<br>";
	echo form_label('No Handphone : ');
	echo form_input('no_hp');
	echo "<br>";
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_close();
?>
