<?php
function hitung($bilangan1, $bilangan2, $bilangan3){
	$hasil = $bilangan1*$bilangan2-$bilangan3+$bilangan1;
	return $hasil;
	
	}
	
	echo "hasil operasi bilangan pertama= ".hitung(2, 2, 1);
	echo "<br>hasil operasi bilangan kedua= ".hitung(4, 5, 2);
	echo "<br>hasil operasi bilangan ketiga= ".hitung(6, 2, 2);
	
?>