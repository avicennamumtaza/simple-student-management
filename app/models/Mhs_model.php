<?php

class Mhs_model {
    private $table = 'mhs';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // private $mhs = [
    //     [
    //     "nama" => "A",
    //     "nim" => "A",
    //     "prodi" => "A",
    //     "jurusan" => "A",
    //     ],
    //     [
    //     "nama" => "B",
    //     "nim" => "B",
    //     "prodi" => "B",
    //     "jurusan" => "B",
    //     ],
    //     [
    //     "nama" => "C",
    //     "nim" => "C",
    //     "prodi" => "C",
    //     "jurusan" => "C",
    //     ],
    //     [
    //     "nama" => "D",
    //     "nim" => "D",
    //     "prodi" => "D",
    //     "jurusan" => "D",
    //     ],
    // ];

    public function getAllMhs() {
        // return $this->mhs;
        $this->db->query("select * from $this->table");
        return $this->db->allSet();
    }

    public function getAllMhsByNim($nim) {
        // return $this->mhs;
        $this->db->query("select * from $this->table where nim=:nim");
        $this->db->bind('nim', $nim);
        return $this->db->singleSet();
    }
}