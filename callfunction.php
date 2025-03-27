<?php
include "fungsi.php";
//pemanggilan fungsi
sayHallo("Annisa");
echo "<br>";
sayHallo("Fitria");
echo "<br>";
sayHallo("THE8");
echo "<br>";
echo penjumlahan(10,7);
echo "<br>";
$nilai1 = 8;
$nilai2 = 9;
echo "Hasil penjumlahan bilangan $nilai1 dengan $nilai2 adalah ".penjumlahan($nilai1, $nilai2);
echo "<hr>";
echo "Jumlah mahasiswa terdaftar sebanyak ".jmlMhs($arrMhs)." orang<br>";
echo "Total usia semua mahasiswa adalah ".totalUsia($arrMhs)." tahun";
/*var_dump($arrMhs);
print_r($arrMhs);
*/
?>