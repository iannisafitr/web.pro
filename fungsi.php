<?php
$arrMhs = [
[
"nim" => "113",
"nama" => "Annisa",
"usia" => 20
],
[
"nim" => "114",
"nama" => "THE8",
"usia" => 27
]
];
//deklarasi fungsi
function sayHallo($visitor){
	echo "Selamat datang, $visitor";
}

function penjumlahan($a, $b) {
	$hasil = $a + $b;
	return $hasil;
}

function jmlMhs($data) {
	return count($data);
}

function totalUsia($data) {
	$total = 0;
	foreach($data as $mhs) {
		$total += $mhs["usia"];
	}
	return $total;
}

?>