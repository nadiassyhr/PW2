<<<<<<< HEAD
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemograman Web', 'Emely W.', 'Informatika', '2024'),
            new Buku('Matematika Distrik', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku('Kalkulus', 'Robert T.', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;

    }

    public function getKolomKomentar(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
=======
<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemograman Web', 'Emely W.', 'Informatika', '2024'),
            new Buku('Matematika Distrik', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku('Kalkulus', 'Robert T.', 'Erlangga', '2019'),
            new Buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
        );

        return $daftar_buku;

    }

    public function getKolomKomentar(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
}