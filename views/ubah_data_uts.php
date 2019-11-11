<?php
    //print_r ($ambil_data_uts);
	echo form_open('Uts/ubah_data');	
	echo form_fieldset('Data Diri Peserta');
	$id = array('id'=>$ambil_data_uts->id);
	$nama = array('nama'=>$ambil_data_uts->nama);
	$alamat = array('alamat'=>$ambil_data_uts->alamat);
	$email = array('email'=>$ambil_data_uts->email);
	$no_telfon = array('no_telfon'=>$ambil_data_uts->no_telfon);
	echo form_label('Nama : ');
	echo form_hidden('id', $id['id']);
	echo form_input('nama', $nama['nama']);
	echo "<br>";
	echo form_error('nama');
	echo "<br>";
	echo form_label('Alamat : ');
	echo form_input('alamat', $alamat['alamat']);
	echo "<br>";
	echo form_error('alamat');
	echo "<br>";

	echo form_label('Email : ');
	echo form_input('email', $email['email']);
	echo "<br>";
	echo form_error('email');
	echo "<br>";

	echo form_label('No Telfon : ');
	echo form_input('no_telfon', $no_telfon['no_telfon']);
	echo "<br>";
	echo form_error('no_tefon');
	echo "<br>";
	$options = array(
		'A' => 'admin', 
		'B' => 'pengguna',
	);
	echo form_label('Status : ');
	echo form_dropdown('kelas', $options);
	echo "<br>";
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_close();
?>
