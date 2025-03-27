<?php
echo "SOAL 1";
echo "<br>";
echo "Harga Awal = ";
$harga_awal = 50000;
echo $harga_awal;
echo "<br>";
echo "Diskon = ";
$diskon = 10;
echo $diskon;
echo "<br>";
$harga_setelah_diskon;

//Hitung harga setelah diskon
$harga_setelah_diskon = $harga_awal - ($harga_awal * $diskon / 100);
echo "Harga Setelah Diskon = ";
echo $harga_setelah_diskon;

echo "<br>";
echo "<br>";
echo "SOAL 2";
echo "<br>";
function konversiSuhu($celcius) {
	$fahrenheit = ($celcius * 9/5) + 32;
	return "Suhu $celcius °C dalam Fahrenheit adalah $fahrenheit °F";
}
$celcius = 30;
echo konversiSuhu($celcius);

?>