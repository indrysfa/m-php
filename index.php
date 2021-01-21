<?php

echo "Welcome to the jungle <br><hr>";

$a = "welcome ";
$b = "to edutech ";
$c = "pertemuan 1 php";
echo $a;
echo $b;
echo $c;
print "<br>" . $a . " " . $b . " " . $c . "<hr>";
/*==================================================================================*/
echo "<h1>Perhitungan dengan php</h1>";
/*==================================================================================*/

$nama = "indry";
$umur = "26";
$alamat = "jakarta";

print "nama: $nama<br>umur: $umur<br>alamat: $alamat" . "<br>";

$gaji = 10000000;
$pajak = "10%";
$gajibersih = $gaji - ($gaji * 0.1);
echo "Gaji Kotor: Rp." . number_format($gaji, 2) . "<br>Kena Pajak $pajak<br>Jadi gaji bersihnya: $gajibersih" . "<br><hr>";

/*==================================================================================*/
echo "<h1>Cara menampilkan data array</h1>";
/*==================================================================================*/
// $data = array(1,2,3,4,5,6);
// print_r($data);
$data = [1, 2, 3, 4, 5, 6];
print_r($data) . "<br>";
echo "<br>" . $data[3];

$assoc = [
    "siswa" => [
        'david', 'emma', 'khrisna',
        "address" => [
            'jakarta', 'bandung', 'surabaya'
        ]
    ]
];

echo $assoc["siswa"]["address"][1] . "<br><hr>";

/*==================================================================================*/
echo "<h1>Penggunaan if else syntact lama</h1>";
/*==================================================================================*/
$data = true;
// if ($data  == false)
if ($data) {
    echo "Berhasil" . "<br>";
} else {
    echo "Tidak Berhasil" . "<br>";
}
echo "<hr>";

/*==================================================================================*/
echo "<h1>Penggunaan if else syntact baru</h1>";
/*==================================================================================*/
if ($data) :
    echo "Berhasil" . "<br>";
else :
    echo "Tidak Berhasil" . "<br>";
endif;
echo "<hr>";

/*==================================================================================*/
echo "<h1>Penggunaan Switch Case</h1>";
/*==================================================================================*/

$data_1 = 3;
switch ($data_1):
    case 1:
        echo "ini satu";
        break;

    case 2:
        echo "ini dua";
        break;
    default:
        echo "bukan apa apa";
        break;
endswitch;
echo "<hr>";

/*==================================================================================*/
echo "<h1>Penggunaan Object</h1>";
/*==================================================================================*/

$obj = (object)['a' => 1, 'b' => 2, 'c' => 3];
echo $obj->a;
print_r($obj);

echo "<hr>";

/*==================================================================================*/
echo "<h1>Menampilkan default date</h1>";
/*==================================================================================*/
echo date("l, d-M-Y");

echo "<hr>";

/*==================================================================================*/
echo "<h1>Menampilkan default jam</h1>";
/*==================================================================================*/
date_default_timezone_set("Asia/Jakarta");
$masuk = time();
echo date('d-M-Y H:i:s', $masuk);

/*==================================================================================*/
echo "<h1>Menampilkan Striped Warna Column</h1>";
/*==================================================================================*/
?>
<style>
    .ganjil {
        background-color: #00CED1;
    }

    .genap {
        background-color: #FF69B4;
    }
</style>
<?php
for ($i = 1; $i < 20; $i++) {
    if ($i % 2 == 1) {
?>
        <td class="ganjil"><?= $i ?></td>
    <?php
    } else {
    ?>
        <td class="genap"><?= $i ?></td>
<?php
    }
}

/*==================================================================================*/
echo "<h1>Penggunaan Class, Object & Method</h1>";
/*==================================================================================*/

// nama class 
class Mobil
{
    // ini adalah property
    public $merk = 'toyota';
    public $tipe = 'fortuner', $tahun = 2020;
    public $warna = 'biru';
    public $roda = '4';

    // ini adalah method
    public function jalan()
    {
        echo "Tancap boooommmm";
    }

    public function sebutMerk()
    {
        // method dapet mengakses property dari classnya sendiri
        return $this->merk;
    }

    public function uppercaseMerk()
    {
        // method dapat mengakses method dari classnya sendiri
        return strtoupper($this->sebutMerk());
    }

    // 3 jenis permission didalam class (public, private, protected)
}

// proses instansi
/*  
    $mobil = new Mobil();

    echo "Mobil $mobil->merk <br>";
    echo "Merknya $mobil->tipe <br>";
    echo "Lahir tahun $mobil->tahun <br>";
    echo "Punya warna $mobil->warna <br>";
    echo "Jumlah rodanya $mobil->roda <br><hr>";
*/

$mobil = new Mobil();
$mobil->merk = "BMW";
$mobil->tipe = "classic dong";
$mobil->tahun = "1989";
$mobil->warna = "pink";

echo "Mobilnya indry nih $mobil->merk <br>";
echo "Merknya $mobil->tipe <br>";
echo "Lahirnya $mobil->tahun <br>";
echo "Punya warna $mobil->warna <br>";
echo "Jumlah roda $mobil->roda <br>";
echo $mobil->jalan();

// instansiasi
$mobil = new Mobil();
// method chaining
$isiTangkiSekarang = $mobil->isiBensin(5)->sisaBensin();
echo "isi tangki setelah diisi adalah ".$isiTangkiSekarang." Liter<br>";

$isiTangkiSekarang = $mobil->jalan(30);
echo "sisa tangki setalah 30km adalah ".$isiTangkiSekarang->sisaBensin()." Liter<br>";
$sisaBensin = $mobil->isiBensin(2)->jalan(40)->sisaBensin();
echo "Sisa bensin mobilnya = ".$sisaBensin ." Liter";

/*==================================================================================*/
echo "<h1>Contruct & Destruct</h1>";
/*==================================================================================*/
class Motor
{
    public $merk = ''; // Hayabusa

    // magic method yang akan dijalankan duluan (ketika class di instansiasi)
    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function getMerk()
    {
        return $this->merk; // Hayabusa
    }

    // magic method yg akan dijalankan ketika object dihapus (dijalankan terakhir)
    public function __destruct()
    {
        echo "<br>Terimakasih <- ini destruct";
    }
}

$motor = new Motor('Hayabusa');
echo 'Merk motornya adalah '.$motor->merk;
echo 'sumpah deh? merknya '.$motor->getMerk()."<br>";
echo 'beneran lah merknya '.$motor->getMerk();

/*==================================================================================*/
echo "<h1>Public, Private, Protected</h1>";
/*==================================================================================*/
// public, private, protected
// public itu bisa diakses dari class itu sendiri atau bukan
// private itu bisa diakses hanya dari class itu sendiri
// protected mirip private, tapi dipanggil langsung atau inheritence
class Sekolah
{
    // property
    private $namaSekolah;

    // ini setter
    public function getNamaSekolahA()
    {
        return $this->namaSekolah;
    }
}

$sekolah = new Sekolah();
$sekolah->namaSekolah= 'Dream High';
echo "nama sekolahnya adalah ".$sekolah->getNamaSekolahA();
/*==================================================================================*/
echo "<h1>Setter dan Getter</h1>";
/*==================================================================================*/
// setter dan getter
// setter adalah public method untuk memberikan/mengatur nilai private property
// getter adalah public method untuk mendapatkan nilai private property
class SekolahB
{
    // property
    private $namaSekolah;

    // ini setter
    public function setNamaSekolahB($namaSekolah)
    {
        $this->namaSekolah = $namaSekolah;
    }

    // ini getter
    public function getNamaSekolahB()
    {
        return $this->namaSekolah;
    }
}
echo "<h4>Setter & Getter</h4><hr>";
$sekolah = new SekolahB();
$sekolah->setNamaSekolahB('Dream High');
echo "nama sekolahnya adalah ".$sekolah->getNamaSekolahB();

/*==================================================================================*/
echo "<h1>Contoh</h1>";
/*==================================================================================*/
class Sepeda
{
    private function naik()
    {
        return "naik dulu cuy<br>";
    }
    
    private function pegangStang()
    {
        return "pegang stangnya dong<br>";
    }

    private function gowes()
    {
        return "cus lanjutken gowesnya<br>";
    }

    // getter
    public function sepedaan()
    {
        $sepedaan = $this->naik();
        $sepedaan .= $this->pegangStang();
        $sepedaan .= $this->gowes();
        $sepedaan .= "gaskeuuuunn boskuuuu ampe cape<br>";
        return $sepedaan;
    }
}

$gowesan = new Sepeda();
echo $gowesan->sepedaan();

/*==================================================================================*/
echo "<h1>Tugas abstract class & abstract method</h1>";
/*==================================================================================*/
echo "<h3><hr>abstract class & abstract method</h3><hr>";
// Buat abstract class Truk yang merupakan parent class
// Buat child class Hino & Mitsubisi
// Berapa besar volume pasir yang dapat diangkut
// Mempunyai berapa besar tangki bensin(liter)
// dapat menempuh berapa jauh (jarak tempuh = bensin * tangki)
// Hasil:
// Truk Hino dapat menampung pasir sebanyak ... kubik, memiliki tangki sebesar ... liter, dapat menempuh jarak maksimal ... km
// Inheritance, abstract

abstract class Truk
{
    abstract protected function hitungVolume($volume);
    abstract protected function hitungTangki($liter);
    abstract protected function hitungJarak($bensin,$tangki);
}

class Hino extends Truk
{
    protected $liter = 4;
    protected $bensin1,$tangki1;

    public function hitungVolume($volume)
    {
        return pow($this->liter, 3);
    }

    public function hitungTangki($liter)
    {
        return $liter;
    }

    public function hitungJarak($bensin,$tangki)
    {
        $this->bensin1 = $bensin;
        $this->tangki1 = $tangki;
        $jarak = $this->bensin1 * $this->tangki1;
        return $jarak;
    }

    public function getBensin()
    {
        return $this->bensin1;
    }
}

$hasil = new Hino();
echo 'Truk Hino dapat menampung pasir sebanyak ' . $hasil->hitungVolume(2).' kubik, memiliki tangki sebesar ' . $hasil->hitungTangki(4) . ' liter, dapat menempuh jarak maksimal ' . $hasil->hitungJarak(10,5) .' km<br><br>';
echo '<b>manggil protected dengan method </b>'.$hasil->getBensin().' <b>km</b><br><br>';
/*==================================================================================================== */
class Mitsubisi extends Truk
{
    protected $liter = 4;

    public function hitungVolume($volume)
    {
        return pow($this->liter, 3);
    }

    public function hitungTangki($liter)
    {
        return $liter;
    }

    public function hitungJarak($bensin,$tangki)
    {
        $this->bensin = $bensin;
        $this->tangki = $tangki;
        $jarak = $bensin * $tangki;
        return $jarak;
    }
}

$hasil = new Mitsubisi();
echo 'Truk Mitsubisi dapat menampung pasir sebanyak ' . $hasil->hitungVolume(30).' kubik, memiliki tangki sebesar ' . $hasil->hitungTangki(5) . ' liter, dapat menempuh jarak maksimal ' . $hasil->hitungJarak(30,4) .' km';

/*==================================================================================*/
echo "<h1>ABSTRACT INTERFACE CLASS + CHAINING METHOD</h1>";
/*==================================================================================*/
/*  
    TUGAS LATIHAN ABSTRACT INTERFACE CLASS + CHAINING METHOD
// buat abstract class pesawat
// isi dari abstrat class adalah property nama, (1) method yg menentukan nama pesawat, dan (4) abstract method terbang
// buat interface kendaraan udara
// isi dari interface adalah method yg menjelaskan (2) isi bahan bakar (jenis), (3) isi bahan bakar sebanyak kapasitas tangki, (5) terbang dengan kecepetan maksimal pesawat, (6) terbang dengan ketinggian maksimal, (7) menampung penumpang
// buat class boeing & hercules
// class ini mempunyai parent abstract pesawat dan parent interface
// HASIL
// class boeing
// "Pesawat ini tipenya {(1) boeing-87798392}. Diisi dengan bahan bakar {(2) Avtur} sebanyak {(3) 50} Liter. {(4) Pesawat ini melesat dengan kecepatan }->{(5) 250km/h}->{(6) diketinggian 10000feet}. Pesawat ini dapat menampung penumpang sebanyak {(7) 150} orang."
// jadi class boeing & hercules akan mempunyai 6 method dan dapat menjalan 7 method, usahakan method 4-5-6 menggunakan chaining method yang sudah kita pelajari saat itu
//  Goodluck :)

/*============== PROTECTED PROPERTY ==============*/
echo "<h2><hr><hr>=== Tugas Abstract ===</h2>";
// echo "<h3><hr>Protected Property</h3><hr>";

abstract class Pesawat // tidak bisa private hanya protected & public
// ciri2 / khas pesawat
{
    protected $nama;

    public function getName($nama)
    {
        $this->nama = $nama;
        return $this->nama;
    }

    abstract protected function terbang();
}

interface KendaraanUdara
// harus ada di class boieng
{
    public function get_bahan_bakar();
    public function set_bahan_bakar($jenis);
    public function hitungVolume($volume);
    public function hitungTangki($liter);
    public function hitungKecepatan($bensin,$tangki);
    public function set_penumpang($orang,$kapasitas);
    public function get_penumpang();
}

class Boieng extends Pesawat implements KendaraanUdara
{
    private $jenis;
    protected $liter = 4;

    public function terbang()
    {
        return 'meluncur yahoooooo......';
    }

    public function set_bahan_bakar($jenis)
    {
        $this->jenis = $jenis;
    }

    public function get_bahan_bakar()
    {
        return $this->jenis;
    }

    public function hitungVolume($volume)
    {
        return pow($this->liter, 3);
    }

    public function hitungTangki($liter)
    {
        return $liter;
    }

    public function hitungKecepatan($bensin,$tangki)
    {
        $this->bensin = $bensin;
        $this->tangki = $tangki;
        $kecepatan = $bensin * $tangki;
        return $kecepatan;
    }

    public function set_penumpang($orang,$kapasitas)
    {
        $this->orang = $orang;
        $this->kapasitas = $kapasitas;
        $jumlahpenumpang = $orang * $kapasitas;
        return $jumlahpenumpang;
    }

    public function get_penumpang()
    {
        return $this->orang;
    }

    public function jumlahCCTV($jumlah)
    {
        return $jumlah;
    }
}

$pesawat = new Boieng();
$pesawat->set_bahan_bakar('Avtur ');
$pesawat->set_penumpang(150,1);

echo 'Pesawat ini tipenya ' . $pesawat->getName('boeing-87798392 ') . 'Diisi dengan bahan bakar ' . $pesawat->get_bahan_bakar() . 'sebanyak ' . $pesawat->hitungTangki(50) . 'Liter. Pesawat ini melesat dengan kecepatan ' . $pesawat->hitungKecepatan(5,50) . 'km/h diketinggian 10000 feet. Pesawat ini dapat menampung penumpang sebanyak ' . $pesawat->get_penumpang() . 'orang. ' . $pesawat->terbang() . 'Special CCTV ' . $pesawat->jumlahCCTV(5);

/*==================================================================================*/
echo "<h1>Inheritance</h1>";
/*==================================================================================*/
/*  
    TUGAS COI OOP INHERITENCE
    Parent class namanya BangunDatar
        property = nama (protected)
        method = set get nama (tugasnya untuk mengatur isi property dan mengambil nilainya)
    Child class Persegi yang merupakan turunan dari BangunDatar
        property = sisi (private)
        method = 
            1. luas (menghitung luas persegi) dibuat dengan dinamis
            2. keliling (menghitung keliling persegi) dibuat dengan dinamis

/*============== PROTECTED PROPERTY ==============*/
echo "<h2><hr><hr>=== Tugas Inheritance ===</h2>";
echo "<h3><hr>Ke-1</h3><hr>";

class BangunDatar
{
    public $sisi;

    public function setgetNama($sisi)
    {
        $this->sisi = $sisi;
    }
}
class Persegi extends BangunDatar{
    public function luas($luas)
    {
        $luas = $this->sisi * 2;
        return "Luasnya adalah ".$luas;
    }

    public function keliling($a)
    {
        $keliling = $this->sisi * $a ;
        return 'Kelilingnya adalah '.$keliling;
    }
}



$hasil = new Persegi();
echo "<br>Hasil dari ".$hasil->setgetNama(3,4).", ".$hasil->luas('');
echo "<br>Hasil dari ".$hasil->keliling(4);
/*================================================================================================*/
echo "<h3><hr>Ke-2</h3><hr>";
    // Child class Segitiga yang merupakan turunan dari BangunDatar
    //     property = alas,tinggi (private)
    //     method = 
    //         1. luas (menghitung luas segitiga) dibuat dengan dinamis
    //         2. keliling (menghitung keliling segitiga) dibuat dinamis
    // child class Lingkaran yang merupakan turunan dari BangunDatar
    //     property = jari-jari (private)
    //     method = 
    //         1. luas (menghitung luas lingkaran) dibuat dengan dinamis
    //         2. keliling (menghitung keliling lingkaran) dibuat dinamis
    // hasil : 
    //     class persegi
    //         "ini adalah bangun persegi"
    //         "mempunyai panjang sisi = ??, maka luasnya adalah ?? dan kelilingnya adalah ??"
    //     class segitiga
    //         "ini adalah bangun segitiga"
    //         "mempunyai alas = ?? dan tinggi = ??, maka luasnya adalah ?? dan kelilingnya adalah ??"
    //     class lingkaran
    //     "ini adalah bangun lingkaran"
    //     "mempunyai jari-jari = ??, maka luasnya adalah ?? dan kelilingnya adalah ??"

class BangunDatar1
{
    protected $alas,$tinggi;

    public function setgetName($alas,$tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
}
class Segitiga extends BangunDatar1{
// private harus melalui method
    private function luas()
    {
        $luas = $this->alas * $this->tinggi * 0.5;
        return "Luasnya adalah ".$luas;
    }

    public function keliling($a)
    {
        $luas = $this->luas();
        $keliling = $this->alas * $a ;
        return 'Kelilingnya adalah '.$keliling.$luas;
    }
}

$segitiga = new Segitiga();
echo "<br>Hasil dari ".$segitiga->setgetName(3,4);
echo "<br>segitiga dari ".$segitiga->keliling(4);

/*============== PROTECTED PROPERTY ==============*/
echo "<h2><hr><hr>=== Challenge Inheritance ===</h2>";
echo "<h3><hr>Protected Property</h3><hr>";
// 1. protected property, tidak dapat dipanggil  secara langsung tanpa melalui methos dari classnya sendiri ataupun dari child classnya
class Animals
{
    protected $nama;

    public function setgetNama($nama)
    {
        $this->nama = $nama;
        return $this->nama;
    }
}
class Mamalia extends Animals{
    public function melahirkan()
    {
        return 'Hewan bereproduksi dengan cara melahirkan';
    }
}

class Unggas extends Animals{
    public function bertelur()
    {
        return 'Hewan bereproduksi dengan cara bertelur';
    }
}


$mamalia = new Mamalia();
echo "<br>Hewan ini namanya adalah ".$mamalia->setgetNama('Paus').", ".$mamalia->melahirkan();
$unggas = new Unggas();
echo "<br>Hewan ini namanya adalah ".$unggas->setgetNama('Soang').", ".$unggas->bertelur();
echo "<br>";

echo "<h3><hr>type hinting</h3><hr>";
// $mobil = new Mobil();
// $cal = new Calculation();
// $cal->hitungJarak($mobil);

// TUGAS
// class Mobil
//  punya property = merk,harga,jumlah,lunas
//  punya method:
//      1. setgetmerk() dengan type argument string
//      2. setgetharga() dengan type argument float
//      3. setgetjumlah() dengan type argument integer
//      4. setgetlunas() dengan type argument bool (true/false)
// Beli Mobil {merk}, harganya {harga}, sebanyak {jumlah}, {if true == lunas false == belum lunas}

class Mobil
{
    private $merk,$harga,$jumlah,$lunas;

    public function getMerk(string $merk)
    {
        $this->merk = $merk;
        return $merk;
    }

    public function getHarga(float $harga)
    {
        $this->harga = $harga;
        return $harga;
    }

    public function getJumlah(int $jumlah)
    {
        $this->jumlah = $jumlah;
        return $jumlah;
    }

    public function getLunas(bool $lunas)
    {
        if ($lunas === true) {
            $this->lunas = 'lunas';
        } else {
            $this->lunas = 'belum lunas';
        }
        return $this->lunas;
    
    }
}

$hasil = new Mobil();

echo 'Beli Mobil ' . $hasil->getMerk('Jett') . ', harganya ' . $hasil->getHarga(1000000000.00) . ', sebanyak ' . $hasil->getJumlah(1) . ', ' . $hasil->getLunas(true);


// kalo pakai terneri operator
// $hasil->getLunas(true) == true? 'Beli Mobil ' . $hasil->getMerk('Jett') . ', harganya ' . $hasil->getHarga(1000000000.00) . ', sebanyak ' . $hasil->getJumlah(1) . ', lunas': 'Beli Mobil ' . $hasil->getMerk('Jett') . ', harganya ' . $hasil->getHarga(1000000000.00) . ', sebanyak ' . $hasil->getJumlah(1) . ', belum lunas';

/*==================================================================================*/
echo "<h1>Polymorphism</h1>";
/*==================================================================================*/
/*============== PROTECTED PROPERTY ==============*/
echo "<h2><hr><hr>=== Polymorphism ===</h2>";

// Polymorphism
echo "method yg berada pada class berbeda tetapi melakukan hal yg sama, dengan nama method yg sama juga<br><hr>";

interface BangunDatar
{
    public function hitungLuas();
}

class Segitiga implements BangunDatar
{
    private $alas, $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        return ($this->alas * $this->tinggi / 2);
    }
}

class Persegi implements BangunDatar
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function hitungLuas()
    {
        return pow($this->sisi, 2);
    }
}

$segitiga = new Segitiga(4, 5);
$persegi = new Persegi(5);

echo 'Luas Segitiga dengan alas 4 dan tinggi 5 adalah ' . $segitiga->hitungLuas() . '<br>';
echo 'Luas Persegi dengan sisi 5 adalah ' . $persegi->hitungLuas() . '<br><hr>';
/*==================================================================================*/
echo "<h1>Type Hinting</h1>";
/*==================================================================================*/
echo '<h2> Type Hinting</h2>';
// type hinting
// parameter/argument dari suaru method mempunyai rules untuk valuenya 
//bisa dibilang untuk meningkatkan keamanan data dan integritas data itu sendiri
// kalo rules dari value ga sesuai dengan yg diharuskan (diset oleh type hinting) maka akan terjadi error

echo 'type hinting : array, object = class, integer, string, tipe data lain';
echo '<h3> Type Hinting - Array </h3>';

function hitungJarak(array $kendaraan)
{
    foreach ($kendaraan as $mobil) {
        $jarakMax = $mobil[1] * $mobil[2];
        echo $mobil[0] . " = " . $jarakMax . "<br>";
    }
}

$kendaraan = [
    ['Avanza', 10, 25],
    ['Toyota', 15, 21],
];

// $kendaraan = 'avanza';
hitungJarak($kendaraan);

echo '<hr><h3> Type Hinting - Object </h3>';
// type hinting object
class Helicopter
{
    private $merk, $efisiensi, $volBbm;

    public function __construct($merk, $efisiensi, $volBbm)
    {
        $this->merk = $merk;
        $this->efisiensi = $efisiensi;
        $this->volBbm = $volBbm;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getEfisiensi()
    {
        return $this->efisiensi;
    }
    public function getVolBbm()
    {
        return $this->volBbm;
    }
}

class Calculation
{
    public function hitungJarak(Helicopter $helicopter) //type diambil dari class nya
    {
        $efisiensi = $helicopter->getEfisiensi();
        $volBbm = $helicopter->getVolBbm();
        $jarakMax = $efisiensi * $volBbm;
        echo "<br>" . $helicopter->getMerk() . " = " . $jarakMax;
    }
}

$hercules = new Helicopter('Hercules', 10, 20);
$cal = new Calculation();
$cal->hitungJarak($hercules);

class Mobil
{
    public function getMerk()
    {
        return 'Merk';
    }
}

echo '<hr><h3> Type Hinting - Interface </h3>';

interface Pengangkut
{
    public function kapasitas(int $kapasitas);
}

class Truk implements Pengangkut
{
    private $merk, $kapasitas;

    public function __construct(string $merk)
    {
        $this->merk = $merk;
    }

    public function getMerk()
    {
        return $this->merk;
    }
    
    public function kapasitas(int $kapasitas)
    {
        $this->kapasitas = $kapasitas;
        return $this->merk;
    }

    public function jalan(Sistem $driver)
    {
        echo $this->merk . " sedang bersiap-siap " . $driver->identitas() . " siap jalan dengan kecepatan penuh";
    }
}

class Sistem
{
    private $nama, $robot;

    public function __construct(string $nama, string $robot)
    {
        $this->nama = $nama;
        $this->robot = $robot;
    }

    public function identitas()
    {
        return $this->nama . $this->robot;
    }
}

$sistem = new Sistem('Robot siap menjalankan ', 'Robot versi 1.0');
$truk = new Truk('Hino');
echo 'Truk merk ' . $truk->getMerk() . ' mempunyai kapasitas sebesar ' . $truk->kapasitas(10). ' km kubik<br>';
$truk->jalan($sistem);

