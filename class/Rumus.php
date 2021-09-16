<?php
class Rumus {
	public $persen;
	function keuntungan(int $hargaBeli, int $hargaJual): void {
		$selisih=abs($hargaBeli-$hargaJual);
		$persen=($selisih/$hargaBeli)*100;

		echo "beli: $hargaBeli \n";
		echo "jual: $hargaJual \n";

		if ($hargaBeli<$hargaJual): 
			$line1="selamat bray \n"; 
			$line2="keuntungan"; 
		elseif ($hargaBeli>$hargaJual):
			$line1="wah rugi bandar ente bray \n"; 
			$line2="kerugian"; 
		else:
			$line1="ga dapet apa2 ente \n"; 
			$line2="transaksi"; 
		endif;

		echo $line1;
		echo "$line2 ente sebesar $persen% sekitar $selisih \n";
	}
}