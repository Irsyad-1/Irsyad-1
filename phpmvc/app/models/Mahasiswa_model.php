<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "ichan",
    //         "nrp" => "193040097",
    //         "email" => "ichan@gmail.com",
    //         "jurusan" =>"teknik informatika",
    //     ],
    //     [
    //         "nama" => "doddy",
    //         "nrp" => "133050321",
    //         "email" => "doddy@gmail.com",
    //         "jurusan" =>"teknik mesin",
    //     ],
    //     [
    //         "nama" => "Erik doang",
    //         "nrp" => "163040123",
    //         "email" => "erik@yahoo.com",
    //         "jurusan" =>"teknik mesin",
    //     ]
    //     ];
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root','');
        }catch(PDOExpection $e) {
            die($ege->tMessage());
        }
    }

        public function getALLMahasiswa()
        {
            $this->stmt = $this->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetcALL(PDO::FETCH_ASSOC);
        }
}