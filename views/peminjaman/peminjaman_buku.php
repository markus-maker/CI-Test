<?php
	echo "<h2>Daftar Peminjam Buku</h2>";
	$template = array(
		'table_open' => '<table border="collapse"
		cellpadding="5" cellspacing="0" class="mytable">');
		$this->table->set_template($template);
		$this->table->set_heading('No' , 'Nim' , 'Nama' , 'Kelas' , 'Judul Buku' , 'Penerbit' , 'Tanggal Pinjam' , 'Tanggal Kembali');		
	$no = 1;
	foreach ($peminjaman as $sf) :
		$this->table->add_row($no++,$sf->nim,$sf->nama,$sf->kelas,$sf->judul_buku,$sf->penerbit,$sf->tgl_pinjam,$sf->tgl_kembali);
	endforeach;
	echo $this->table->generate();

	 ?>
