<<<<<<< HEAD
 <?php

require_once "Orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang{
    protected $nim;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";
    }
 

=======
 <?php

require_once "Orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang{
    protected $nim;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim(){
        return $this->nim;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";
    }
 

>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
}