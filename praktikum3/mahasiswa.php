<<<<<<< HEAD
<?php
    include "orang.php";

    class mahasiswa extends orang{
        public $nim;
        public $prodi;

        public function getNilaiSemester(){

        }

    }

    class mahasiswaAsing extends mahasiswa{
        
        //override
        public function ucapSalam(){
            echo "Hello my name" . $this->nama . "<br>";
        }

=======
<?php
    include "orang.php";

    class mahasiswa extends orang{
        public $nim;
        public $prodi;

        public function getNilaiSemester(){

        }

    }

    class mahasiswaAsing extends mahasiswa{
        
        //override
        public function ucapSalam(){
            echo "Hello my name" . $this->nama . "<br>";
        }

>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
    }