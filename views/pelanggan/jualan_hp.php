<?php
	echo "<h2>Daftar Member Pengunjung Toko Bharina</h2>";
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('ID' , 'Nama Barang' , 'Jumlah Barang' , 'Harga Barang' , 'Nama Pelanggan' , 'Alamat', 'No Handphone');		
	$no = 1;
	foreach ($jualan as $sf) :
		$this->table->add_row($sf->id_barang,$sf->nama_barang,$sf->jumlah_barang,$sf->harga_barang,$sf->nama_pelanggan,$sf->alamat,$sf->no_hp);
	endforeach;
	echo $this->table->generate();
?>
