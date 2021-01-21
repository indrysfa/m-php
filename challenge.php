<?php
echo "<h2><hr><hr>=== Challenge Pertemuan 24 (2020-08-29) ===</h2>";
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