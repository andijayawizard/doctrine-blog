<?php
require 'Manusia.php';
Class Bapak extends Manusia{
	private string $name;
	public function pekerjaan($apa){
		return json_encode($apa);
	}
}
