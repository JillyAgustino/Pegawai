<h1>Data Pegawai Kantor</h1>
<form action="<?php echo site_url('Kantor/cari');?>" method="get">
    <input type="text" name="cari" placeholder="Cari Data Pegawai">
    <button type="submit">Cari Data</button> 
    <a href="<?php echo site_url('kantor/tampil_pegawai'); ?>" style="text-decoration:none; color: black;">Reset</a>
</form>
<?php
echo "<h2>Tampil data kantor</h2>";
echo "<table border=1>";
echo "<tr><th>NO</th> <th>NIP</th> <th>Nama</th> <th> Jabatan </th> <th> Jenis kelamin </th> <th> Alamat </th><th>Aksi</th></tr>";
$no=0;
foreach ($pegawai_kantor as $isi)
    {
        $no++;
    echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$isi->NIP</td>";
            echo "<td>$isi->Nama</td>";
            echo "<td>$isi->Jabatan</td>";
            echo "<td>$isi->Jenis_kelamin</td>";
            echo "<td>$isi->Alamat</td>";
            echo "<td>";
            echo anchor('kantor/koreksi_pegawai/'.$isi->NIP, 'Edit')." | ";
            echo anchor('kantor/konfirm_hapus_pegawai/'.$isi->NIP, 'Hapus');
            echo "</td>";
    echo "</tr>";
    }
echo "</table>";
echo "<p>".anchor('kantor', 'Kembali')."</p>";
?>