<?php
$arrMhs = [
[
"nim" => "111",
"namalengkap" => "Annisa",
"jeniskelamin" => "P",
"programstudi" => "SI",
"alamat" => "Medan"
],
[
"nim" => "112",
"namalengkap" => "THE8",
"jeniskelamin" => "L",
"programstudi" => "RPLA",
"alamat" => "Haicheng"
],
[
"nim" => "113",
"namalengkap" => "Nadia",
"jeniskelamin" => "P",
"programstudi" => "SI",
"alamat" => "Busan"
]
];

$arrProdi = [
	"SI" => "D3 Sistem Informasi",
	"SIA" => "D3 Sistem Informasi Akuntasi",
	"TK" => "D3 Teknologi Komputer",
    "RPLA" => "D3 Rekayasa Perangkat Lunak Aplikasi",
	"TT" => "D3 Teknologi Telokomunikasi",
	"MP" => "D3 Manajemen Pemasaran"
];
					

function  addMhs($id, $nama, $jk, $prodi, $alamat) {
	$data = [
	"nim" => $id,
	"namalengkap" => $nama,
	"jeniskelamin" => $jk,
	"programstudi" => $prodi,
	"alamat" => $alamat
	];
	return $data;
}

function countMhs($data) {
	return count($data);
}
?>