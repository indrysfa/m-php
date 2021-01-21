<?php

require 'template/header.php';
require 'cikokol/kepala.php';
require 'cikupa/kepala.php';
require 'ciledug/kepala.php';
require 'cipondoh/kepala.php';
require 'serpong/kepala.php';
 
$Cikokol 		= new cikokol\Kepala;
$Cikupa 		= new cikupa\Kepala;
$Ciledug 		= new ciledug\Kepala;
$Cipondoh 		= new cipondoh\Kepala;
$Serpong 		= new serpong\Kepala;
$InfoCikokol    = new cikokol\Info;
$InfoCikupa 	= new cikupa\Info;
$InfoCiledug 	= new ciledug\Info;
$InfoCipondoh 	= new cipondoh\Info;
$InfoSerpong 	= new serpong\Info;

$KaryawanCikokol 	= new cikokol\Karyawan;

use cikokol\Kepala as KepalaCikokol;
use cikupa\Kepala as KepalaCikupa;
use ciledug\Kepala as KepalaCiledug;
use cipondoh\Kepala as KepalaCipondoh;
use serpong\Kepala as KepalaSerpong;
use cikokol\Info as InfoCikokol;
use cikupa\Info as InfoCikupa;
use ciledug\Info as InfoCiledug;
use cipondoh\Info as InfoCipondoh;
use serpong\Info as InfoSerpong;
use cikokol\Info as KaryawanCikokol;

$Cikokol 		= new KepalaCikokol();
$Cikupa 		= new KepalaCikupa();
$Ciledug 		= new KepalaCiledug();
$Cipondoh 		= new KepalaCipondoh();
$Serpong 		= new KepalaSerpong();
$InfoCikokol    = new InfoCikokol();
$InfoCikupa     = new InfoCikupa();
$InfoCiledug    = new InfoCiledug();
$InfoCipondoh   = new InfoCipondoh();
$InfoSerpong    = new InfoSerpong();
$KaryawanCikokol    = new KaryawanCikokol();

echo "<p><br>Berikut adalah Kepala Cabang dari kelima cabang yang ada di <b>PT. PERTAMONA</b>:</p>";
// echo 'Kepala Cabang '.$Cikokol->__construct().'<br>'.$InfoCikokol->alamat().'<br>'.$InfoCikokol->telepon();
// echo 'Jumlah Karyawan '.$Karyawan->jumlah('10').' orang<br><br>';

echo '<div class="card" style="width: 30rem;">
<div class="card-header">Kepala Cabang '.$Cikokol->__construct().'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">'.$InfoCikokol->alamat().'</li>
<li class="list-group-item">'.$InfoCikokol->telepon().'</li>

</ul></div><br>';

echo '<div class="card" style="width: 30rem;">
<div class="card-header">Kepala Cabang '.$Cikupa->__construct().'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">'.$InfoCikupa->alamat().'</li>
<li class="list-group-item">'.$InfoCikupa->telepon().'</li>
</ul></div><br>';

echo '<div class="card" style="width: 30rem;">
<div class="card-header">Kepala Cabang '.$Ciledug->__construct().'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">'.$InfoCiledug->alamat().'</li>
<li class="list-group-item">'.$InfoCiledug->telepon().'</li>
</ul></div><br>';

echo '<div class="card" style="width: 30rem;">
<div class="card-header">Kepala Cabang '.$Cipondoh->__construct().'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">'.$InfoCipondoh->alamat().'</li>
<li class="list-group-item">'.$InfoCipondoh->telepon().'</li>
</ul></div><br>';

echo '<div class="card" style="width: 30rem;">
<div class="card-header">Kepala Cabang '.$Serpong->__construct().'</div>
<ul class="list-group list-group-flush">
<li class="list-group-item">'.$InfoSerpong->alamat().'</li>
<li class="list-group-item">'.$InfoSerpong->telepon().'</li>
</ul></div><br>';
require 'template/footer.php';