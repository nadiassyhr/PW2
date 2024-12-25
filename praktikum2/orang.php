<?php
    class orang {
        public $nama;

        public function __construct($nama)
        {
            $this->nama = $nama;
        }

        public function ucapSalam(){
            echo "HALO SEMUA NAMA SAYA" . $this->nama . "<br>";
        }
    
    }