<?php
echo "<h2>Konfirmasi hapus data pegawai</h2>";
echo "<p>Apakah data pegawai ini akan dihapus?</p>";
echo "<table border=1>";
echo "<tr><th>NO</th> <th>NIP</th> <th>Nama</th> <th> Jabatan </th> <th> Jenis Kelamin </th> <th> Alamat </th></tr>";
$no=0;
foreach ($datapegawai as $isi)
    {
        $no++;
    echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$isi->NIP</td>";
            echo "<td>$isi->Nama</td>";
            echo "<td>$isi->Jabatan</td>";
            echo "<td>$isi->Jenis_kelamin</td>";
            echo "<td>$isi->Alamat</td>";
    echo "</tr>";
    }
echo "</table>";
echo "<p>".anchor('Kantor/hapus_pegawai/'.$isi->NIP, 'Ya')." | ";
echo anchor('kantor/tampil_pegawai', 'Tidak')."</p>";
?>