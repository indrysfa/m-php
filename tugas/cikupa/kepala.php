<?php

namespace cikupa;

class Kepala{
	
	public function __construct(){
		return 'Cikupa: Yook Seung Jae';
	}
}

trait Alamat
{
    public function alamat()
    {
        return "Alamat: Jl. Cube Entertainment";
    }
}

trait Telepon
{
    public function telepon()
    {
        return "Telepon: 08126543789";
    }
}

class Info
{
    use Alamat, Telepon;
}
?>