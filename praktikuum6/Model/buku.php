<<<<<<< HEAD
<?php

class buku
{

    protected $id; //+
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function setId($id)
    { //+

        $this->id = $id;
    }

    public function getId()
    { //+

        $this->id;
    }

    public function getjudul()
    {

        return $this->judul;
    }

    public function getpengarang()
    
    {
        return $this->pengarang;
    }
    public function getpenerbit()

    {
        return $this->penerbit;
    }
    public function gettahun()

    {
        return $this->tahun;
    }
=======
<?php

class buku
{

    protected $id; //+
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function setId($id)
    { //+

        $this->id = $id;
    }

    public function getId()
    { //+

        $this->id;
    }

    public function getjudul()
    {

        return $this->judul;
    }

    public function getpengarang()
    
    {
        return $this->pengarang;
    }
    public function getpenerbit()

    {
        return $this->penerbit;
    }
    public function gettahun()

    {
        return $this->tahun;
    }
>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
}