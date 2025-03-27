<?php
$variabelA = 7;
$variabelB = "10";

/*
*Menampilkan informasi perbandingan nilai variabelA & variabelB
*/
if ($variabelA > $variabelB) {
	echo "$variabelA lebih besar dari dari $variabelB";
} else if ($variabelA < $variabelB) {
	echo "$variabelA lebih kecil dari $variabelB";
} else {
	echo "$variabelA sama dengan $variabelB";
}
echo "<br>";
/*
Menampilkan nama program studi berdasarkan kode prodi
*/
$prodi = "D3 SI";
if ($prodi == "D3 SI") {
	echo "D3 Sistem Informasi";
} else if ($prodi == "D3 TK") {
	echo "D3 Teknologi Komputer";
} else if ($prodi == "SIA") {
	echo "D3 Sistem Informasi Akuntansi";
} else {
	"Prodi tidak dikenal";
}
echo "<br>";
switch ($prodi) {
	case "D3 SI":
	    echo "D3 Sistem Informasi";
		break;
	case "D3 TK":
	    echo "D3 Teknologi Komputer";
		break;
	case "D3 SIA":
	    echo "D3 Sistem Informasi Akuntansi";
		break;
	default:
	    echo "Prodi tidak dikenal";
		break;
}
?>