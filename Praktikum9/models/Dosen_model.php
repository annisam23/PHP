<?php
class Dosen_model extends CI_Model
{
    public $id, $nidn, $nama, $gender, $tmp_lahir, $tgl_lahir, $pendidikan;
};
/*class Dosen_model extends CI_Model
{
    private $table = "dosen";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where("nidn", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data)
    {
        //insert into
        $sql = "INSERT INTO dosen (nidn,nama,gender,tmp_lahir,tgl_lahir,pendidikan_trakhir,prodi_kode)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }
}*/
