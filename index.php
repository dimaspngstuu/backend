<?php


class mahasiswa {
    public $nama;
    public $alamat;
    public $jurusan;


    function __construct($dataNama,$dataAlamat,$dataJurusan){

        $this->nama = $dataNama;
        $this->alamat = $dataAlamat;
        $this->jurusan = $dataJurusan;
    }

    //set
    function setNama($data){
        $this->nama = $data;
    }

    function setAlamat($data){
        $this->alamat = $data;
    }

    function setJurusan($data){
        $this->jurusan = $data;
    }

    //get
    function getNama(){
        return $this->nama;
    }

    function getAlamat(){
        return $this->alamat;
    }

    function getJurusan(){
        return $this->jurusan;
    }

}

//membuat object 1
$dimas = new mahasiswa("dimas","depok","informatika");
$dimas->getNama();


//OUTPUT
//sett 
// $dimas->setNama("dimas pangestu");
// $dimas->setAlamat("depok");
// $dimas->setJurusan("Informatika");

// //get
// echo $dimas->getNama();
// echo "</br>";
// echo $dimas->getAlamat();
// echo "</br>";
// echo $dimas->getjurusan();


?>