<?php

namespace cikokol;

class Kepala{
	
	public function __construct(){
		return 'Cikokol: Kim Woo Bin';
	}
}

class Karyawan{
	
	public function jumlah($karyawan){
        return $this->$karyawan;
	}
}

trait Alamat
{
    public function alamat()
    {
        return "Alamat: Jl. AM Entertainment";
    }
}

trait Telepon
{
    public function telepon()
    {
        return "Telepon: 0812456987";
    }
}

class Info
{
    use Alamat, Telepon;
}
?>