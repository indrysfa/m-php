<?php

class Mesin{
    private $tipe;
    private $silinder;
    private $bbm;

    function __construct($tipe,$silinder,$bbm)
    {
        $this->tipe=$tipe;
        $this->silinder=$silinder;
        $this->bbm=$bbm;
    }

    public function getTipeMesin()
    {
        return $this->tipe;
    }

    public function getIsiSilinderMesin()
    {
        return $this->silinder;
    }

    public function getBbmMesin()
    {
        return $this->bbm;
    }
}