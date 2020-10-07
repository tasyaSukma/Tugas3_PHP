<?php
	$nabung = 150000;
	$bunga = 12.5;
	$saldo = $nabung + (($nabung*$bunga)/100);

	echo "Tabungan Awal = Rp. $nabung<br>Bunga Setahun = $bunga%<br>Total Tabungan Setahun = ? <br> Jawaban : Rp. $saldo";
?>