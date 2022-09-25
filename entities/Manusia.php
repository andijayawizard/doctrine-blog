<?php
Class Manusia{
	private string $name;
	private int $age;
	private string $address;

	public function detail(string $name=null, int $age=null, string $address=null) {
		return $name.$age.$address;
	}
	public function skill($apa){
		return json_encode($apa);
	}
}
