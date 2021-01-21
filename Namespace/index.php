<?php

require 'audi/mobil.php';
require 'ferrari/mobil.php';
require 'ferrari/Office/Kantor.php';
 
$Audi 		= new audi\Mobil;
$Ferari 	= new ferrari\Mobil;

echo "<p><b>cara instansiasi pertama</b></p>";
echo $Audi->cetak();
?>
 
<p><?= $Audi->cetak(); ?></p>
<p><?= $Ferari->cetak(); ?></p>

<?php
echo "<p><b>cara instansiasi kedua</b></p>";
use audi\Mobil;
use ferrari\Mobil as MobilFerrari;
use ferrari\Office\Kantor;

$Audi 		= new Mobil();
$Ferari 	= new MobilFerrari();
$kantor 	= new Kantor();

echo $Audi->cetak().'<br>';
echo $Ferari->cetak().'<br>';
echo $kantor->cetak();