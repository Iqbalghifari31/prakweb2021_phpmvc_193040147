<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Albudi",
    //         "nrp" => "333040111",
    //         "email" => "Albudi01@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Tatang",
    //         "nrp" => "333040999",
    //         "email" => "Tatang99@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Ningsih",
    //         "nrp" => "333040555",
    //         "email" => "Ningsih555@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    //     ];

    private $dbh; //database handler
    private $stmt;

    public function __construct() 
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';  

        try {
            $this->dbh = new PDO($dsn, 'root', ''); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() 
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}