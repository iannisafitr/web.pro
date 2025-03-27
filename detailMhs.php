<?php
include "dtMahasiswa.php";

$selectedMhs = $arrMhs[$_GET['id']];
//varr_dump(selectedMh);
?>
<h2>Detail  Mahasiswa</h2>
<table border=0>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><?= $selectedMhs['nim']?></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?= $selectedMhs['namalengkap']?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?= $selectedMhs['jeniskelamin']?></td>
	</tr>
	<tr>
		<td>Program Studi</td>
		<td>:</td>
		<td><?= $selectedMhs['programstudi']?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $selectedMhs['alamat']?></td>
	</tr>
</table>
<input type ="button" value="Kembali" onclick="window.location.href='registrasi.php'">