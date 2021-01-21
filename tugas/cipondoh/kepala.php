<?php

namespace cipondoh;

class Kepala{
	
	public function __construct(){
		return 'Cipondoh: Park Bo Gum';
	}
 
}

trait Alamat
{
    public function alamat()
    {
        return "Alamat: Jl. Reply 1988";
    }
}

trait Telepon
{
    public function telepon()
    {
        return "Telepon: 08198765432";
    }
}

class Info
{
    use Alamat, Telepon;
}
?>