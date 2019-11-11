<?php
	echo form_fieldset('<b> Form Registrasi Anggota Baru Himatikom </b>');
	echo form_label('<b>Nim Mahasiswa : </b>');
	echo "<br>";
	echo form_input('nim');
	echo "<br>";
	echo "<br>";
	echo form_label('<b> Nama Mahasiswa :  </b>');
	echo "<br>";
	echo form_input('nama');
	echo "<br>";
	echo "<br>";
	echo form_label('<b> Tempat Tanggal Lahir : ', 'u_name </b>');
	$data= array(
		'name' => 'u_name',
		'placeholder' => 'Tempat Lahir',
		'class' => 'input_box'
			);
	$data1= array(
		'name' => 'u_name',
		'placeholder' => '06/12/2019',
		'class' => 'input_box'
			);
	echo "<br>";
	echo form_input($data);
	echo form_input($data1);
	echo "<br>";
	echo "<br>";
	$options = array(
		'1' => '2017/2018', 
		'2' => '2019/2020',
		'3' => '2020/2021',
	);
	echo form_label('<b> Tahun Angkatan :  </b>');
	echo "<br>";
	echo form_dropdown('Angkatan', $options);
	echo "<br>";
	echo "<br>";
	echo form_label('<b> Jenis Kelamin :  </b>');
	echo "<br>";
	echo form_radio('Gender','L',TRUE);
	echo form_label('Laki-laki');
	echo form_radio('Gender','P');
	echo form_label('Perempuan');
	echo "<br>";
	echo "<br>";
	echo form_label('<b>Upload Foto</b>');
	echo "<br>";
	echo form_upload('upload','Upload');
	echo "<br>";
	echo "<br>";
	echo form_label('<b> Alamat </b>');
	echo "<br>";
	echo form_textarea(
		['name'=>'address',
		'rows'=>'5',
		'cols'=>'47',
		'id'=>'address',
		'class'=>'form-control',
		'placeholder'=>'']);
	echo "<br>";
	echo form_submit('submit', 'simpan');
	echo form_submit('submit', 'kembali');
	echo form_close();
?>
