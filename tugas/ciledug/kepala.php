<?php

namespace ciledug;

class Kepala{
	
	public function __construct(){
		return 'Ciledug: Wonho';
	}
 
}

trait Alamat
{
    public function alamat()
    {
        return "Alamat: Jl. Starship Entertainment";
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