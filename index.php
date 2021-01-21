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
