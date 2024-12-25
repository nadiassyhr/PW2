<<<<<<< HEAD
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();

        // memberi data model dan menampilkan view
        include "View/BukuView.php";

        
    
    }
=======
<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        // mengakses model
        $data = new DaftarBuku();

        // memberi data model dan menampilkan view
        include "View/BukuView.php";

        
    
    }
>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
}