<?php
	echo form_open('Mahasiswa/ubah_data');	
	echo form_fieldset('Data Diri Mahasiswa');
	$id = array('id'=>$ambil_data_mahasiswa->id);
	$nim = array('nim'=>$ambil_data_mahasiswa->nim);
	$nama = array('nama'=>$ambil_data_mahasiswa->nama);
	$kelas = array('kelas'=>$ambil_data_mahasiswa->kelas);
	echo form_label('Nim Mahasiswa : ');
	echo form_hidden('id', $id['id']);
	echo form_input('nim', $nim['nim']);
	echo "<br>";
	echo form_error('nim');
	echo "<br>";
	echo form_label('Nama Mahasiswa : ');
	echo form_input('nama', $nama['nama']);
	echo "<br>";
	echo form_error('nama');
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
