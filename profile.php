<?php

//include "sekolah.php";

class Profile{
    /**
     * Undocumented variable
     *
     * private / protected / public
     */
    private $nama;
    private $alamat;
    private $tempat_lahir;
    //private $objSekolah;

    public function __construct(){
       // $this->objSekolah = new Sekolah();
    }

    public function setNama($nama){
        $this->nama = $nama;
    }
    
    #Manggil class lain? dari dalam class?

    public function getNama(){
        return $this->nama;
    }

    // public function setNamaSekolah($nama){
    //     $this->objSekolah->setNama($nama);
    // }

    // public function getNamaSekolah(){
    //     return $this->objSekolah->getNama();
    // }

    public function __destruct(){

    }
}