<<<<<<< HEAD
<?php 

require_once "model/daftarbuku.php";

class bukucontroler{
    
    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";
      
    }
=======
<?php 

require_once "model/daftarbuku.php";

class bukucontroler{
    
    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";
      
    }
>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
}