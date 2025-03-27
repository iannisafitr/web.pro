<?php
$arrBuku = [
  [
   "judul" => "Pemrograman Web",
   "harga" => "50000",
   "jumlahTerjual" = "3"
  ],
  [
   "judul" => "Belajar Web",
   "harga" => "60000",
   "jumlahTerjual" = "2"
  ],
  [
   "judul" => "HTML & CSS",
   "harga" => "40000",
   "jumlahTerjual" = "5"
  ],
];

//Deklarasi function
function totalPendapatan($data) {
	$totalPendapatan = 0;
	foreach($data as $dtBuku) {
	$total += $dtBuku["harga"];
	}
	return $total;
}

function ratarataPendapatan($totalBuku) {
	$hasil = pendapatan($arrBuku);
	return $hasil / count($arrBuku);
}
	
function pendapatan($data) {
	$pendapatan 
}
?>