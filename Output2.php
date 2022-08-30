<?php

function Pengunjung ($nama,$kota, $jumlahKunjungan) {
echo "<h1>Halo {$nama} Asal {$kota}, selamat datang!</h1>";
  echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";

  if ($jumlahKunjungan > 10) {
    echo "<p>Kami memiliki hadiah ebook gratis untuk anda karena anda telah mengunjungi situs kami sebanyak {$jumlahKunjungan} kali.</p>";
  }
  else{
  echo "<p>lebih sering kunjungi situs kami agar mendapat ebook gratis</p>";
	}
}
Pengunjung ("Rahma","Magetan", 20);
Pengunjung ("Liza","Surabaya", 10);
Pengunjung ("Anggita","Bangkalan",9);
?>