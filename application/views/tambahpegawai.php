<?php
echo "<h2>Tambah data pegawai</h2>";
echo form_open('kantor/simpan_pegawai');
echo "<table align='left' width='100%'>";

	$field1=array('name' => 'NIP','size'=>'15');
	echo "<tr><td width='10%'>NIP</td><td width='1%'> :</td><td>".form_input($field1)."</td></tr>";

	$field2=array('name' => 'Nama','size'=>'30');
	echo "<tr><td>Nama</td><td> :</td><td>".form_input($field2)."</td></tr>";

	$field3=array('name' => 'Jabatan','size'=>'30');
	echo "<tr><td>Jabatan</td><td> :</td><td>".form_input($field3)."</td></tr>";

	$field4=array('name' => 'Jenis_kelamin','size'=>'30');
	echo "<tr><td>Jenis kelamin</td><td> :</td><td>".form_input($field4)."</td></tr>";

	$field5=array('name' => 'Alamat','size'=>'11');
	echo "<tr><td>Alamat</td><td> :</td><td>".form_input($field5)."</td></tr>";

echo form_hidden('mode', 'baru');
echo "<tr><td>".form_submit('mysubmit','Simpan')."</tr></td>" ;

echo "</table>";
echo form_close();
echo "<p>".anchor('kantor', 'Kembali')."</p>";
?>