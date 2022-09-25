<?php
require './entities/Bapak.php';
$bapak=new Bapak;
echo $bapak->detail('anton');
echo $bapak->pekerjaan('petani');
echo $bapak->skill('memasak');
