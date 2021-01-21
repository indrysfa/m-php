<?php

echo '<h4>TRAIT</h4>';
echo '<p?>Trait adalah suatu mekanisme dimana suatu class diizinkan untuk menggunakan kembali kode program (code reuse) yang berasal dari hirarki yang berbeda.</p>';
echo '<h5>Contoh:</h5>';

trait ApaKabar
{
    public function apaKabar()
    {
        return "Apa kabar?<br>";
    }
}

trait SelamatPagi
{
    public function selamatPagi()
    {
        return "Selamat pagi?";
    }
}

class Pesan
{
    // menggunakan trait lebih dari satu
    use ApaKabar, SelamatPagi;
}

$obj = new Pesan();
echo $obj->apaKabar();
echo $obj->selamatPagi();