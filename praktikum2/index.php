<?php
include "orang.php";
include "BankCustomer.php";
?>

<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class>praktikum 2</h1>

    <div class="di">
        <?php 
           $nasabah = new bankCustomrs();
           $nasabah->setcustomersName ("nadia syahira");
           $nasabah->setAdres("mendalo, jambi");
           $nasabah->setemail ("emely @goggle.com");
           $nasabah->setcard ( "wadiah");
           $nasabah->getacc(" platinum");

           $nasabah ->insertCard();
           $nasabah->enterPIN(123456);
?>
    </div>
    
</body>
</html>

<!-- localhost/index.php?nama=nadia --> 
<!-- http://uinjambi.ac.id/berita?page=1&search=kuliah&orderBy=id -->