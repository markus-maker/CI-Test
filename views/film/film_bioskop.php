<?php
	echo "<h2>Daftar Member Pengunjung</h2>";
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('No' , 'id_member' , 'Nama' , 'Alamat' , 'No HP' , 'Judul Film' , 'Jenis Film', 'Kunjungan');		
	$no = 1;
	foreach ($film as $sf) :
		$this->table->add_row($no++,$sf->id_member,$sf->nama_pengunjung,$sf->alamat,$sf->no_hp,$sf->judul_film,$sf->jenis_film,$sf->kunjungan);
	endforeach;
	echo $this->table->generate();

	 ?>
