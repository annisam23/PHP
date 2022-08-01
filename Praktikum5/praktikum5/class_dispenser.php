<?php

class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private  $volumeGelas;
    public  $namaMinuman;

    function isi($vol){
        $this->volume=$vol;
    }

}

class Minuman extends Dispenser
{
    public $uang;
    function __construct($nama_Minuman,$volGelas,$harga){
        $this->namaMinuman = $nama_Minuman;
        $this->volumeGelas = $volGelas;
        $this->hargaSegelas = $harga;
    }

    function volumeSetelah(){
        $this->volume =  $this->volume - $this->volumeGelas;
        return $this->volume;
    }

    function transaksi($uang){
        $this->uang = $uang;
        return $this->uang - $this->hargaSegelas;
    }

    function cetak(){
        echo "Nama Minuman : ". $this->namaMinuman."<br>";
        echo "Harga Segelas :".$this->hargaSegelas."<br>";
        echo "Volume segelas : ".$this->volumeGelas."<br>";
        echo "=============================="."<br>";
        echo "Uang : ".$this->uang."<br>";
        echo "Dana sisa : ".$this->transaksi($this->uang)."<br>";
        echo "Volume Awal : ".$this->volume."<br>";
        echo "volume dispenser setelah diambil : ".$this->volumeSetelah();
    }
}

$minuman = new Minuman("Coca-Cola",250,8000);
$minuman->transaksi(10000);
$minuman->isi(1000);
$minuman->cetak();
