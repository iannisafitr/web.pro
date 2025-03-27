<?php
$jnsKelamin = array("Laki-laki", "peremepuan");
echo strtoupper($jnsKelamin[0])."<br>";
echo substr($jnsKelamin[0],0,4)."<br>";

if ($jnsKelamin[0] == "Laki-laki") {
	echo "Cowok";
} else {
	echo"Cewek";
}
echo "<br>";
$jnsKelamin[0] == "Laki-laki" ? $jk = "Cowok" : $jk = "Cewek";
echo $jk;

echo "<br>";
$ukuranArray = count($jnsKelamin);
$index = 0;
while($index < $ukuranArray) {
	echo $jnsKelamin[$index]."<br>";
	$index++;
}

foreach($jnsKelamin as $jk) {
	echo "$jk<br>";
}
?>