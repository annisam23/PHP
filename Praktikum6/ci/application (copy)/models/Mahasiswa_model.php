<?php

//class model
class Mahasiswa_model extends CI_Model
{
    //buat property
    public $id, $nim, $nama, $gender, $ipk;

    //buat method predikat ipk
    public function predikat()
    {
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
