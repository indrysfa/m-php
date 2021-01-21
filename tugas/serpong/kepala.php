<?php

namespace serpong;

class Kepala{

    public function __construct(){
		return 'Serpong: Kang Daniel';
    }
 
}

trait Alamat
{
    public function alamat()
    {
        return "Alamat: Jl. Wanna One";
    }
}

trait Telepon
{
    public function telepon()
    {
        return "Telepon: 08123456789";
    }
}

class Info
{
    use Alamat, Telepon;
}
?>