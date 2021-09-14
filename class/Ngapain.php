<?php
class Ngapain {
	function tanya(string $apa): void {
		$pilihan=[
			"1"=>"main game",
			"2"=>"trading kripto",
			"3"=>"ngobrol sama colokan USB",
		];

		foreach ($pilihan as $key => $value) {
			echo $key.". ".$value."\n";
		}

		echo "pilih salah satu (1, 2, 3) ".$apa;
		$pilihan=fgets(STDIN);

		switch ($pilihan) {
			case 1:
				echo "anda seorang gamer";
				break;
			case 2:
				echo "anda seorang trader";
				break;
			case 3:
				echo "anda totalitas gabut";
				break;
		}
	}
}

$a=new Ngapain;
$a->tanya("apa yang anda lakukan kalo lagi gabut? ");
