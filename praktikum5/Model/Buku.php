<<<<<<< HEAD
<?php

class Buku{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function _construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPengarang(){
        return $this->pengarang;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getTahun(){
        return $this->tahun;
    }


}

=======
<?php

class Buku{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function _construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPengarang(){
        return $this->pengarang;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getTahun(){
        return $this->tahun;
    }


}

>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
