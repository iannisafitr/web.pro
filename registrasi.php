<?php
include "dtMahasiswa.php";

if (isset($_POST['btnSubmit'])) {
	$newMhs = addMhs($_POST['nim'],$_POST['namalengkap'],$_POST['jeniskelamin'], $_POST['programstudi'],$_POST['alamat']);
	
	$arrMhs[] = $newMhs;
}
?>
<table border="1">
    <thead>
       <th>No</th>
       <th>NIM</th>
       <th>Nama Lengkap</th>
       <th>Jenis Kelamin</th>
	   <th>Program Studi</th>
	   <th>Alamat</th>
	   <th></th>
	</thead>
<tbody>
<?php
foreach ($arrMhs as $key => $mhs) {
?>
    <tr>
      <td><?= ++$key ?></td>
      <td><?= $mhs['nim']?></td>
	  <td><?= $mhs['namalengkap']?></td>
	  <td><?= $mhs['jeniskelamin'] == "L" ? "Laki-Laki" : "Perempuan" ?></td>
	  <td><?= $arrProdi[$mhs['programstudi']]?></td>
	  <td><?= $mhs['alamat']?></td>
	  <td>
	      <a href="detailMhs.php?id=<?= --$key?>">Detail</a>
	  </td>
	</tr> 
<?php } ?>
</tbody>
</table>
<?php
echo "Jumlah Mahasiswa terdaftar sebanyak ".countMhs($arrMhs)." orang.";
/*
echo "NIM: ".$_POST["nim"]."<br>";
echo "Nama Lengkap: ".$_POST["namalengkap"]."<br>";
$_POST ["jeniskelamin"] == "L" ? $jk = "Laki-Laki" : $jk = "Perempuan"."<br>";
echo "Program Studi: ".$arrProdi[$_POST["programstudi"]]."<br>";
echo "Alamat: ".$_POST["alamat"]."<br>";
*/
?>