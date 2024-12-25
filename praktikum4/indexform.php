<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display:block;
        }
        </style>
    <title>Form dengan OPP</title>
</head>
<body>
    <?php
        require_once "FormMahasiswa.php";

        $form = new Form();
        $form->setTextField('Nama', '');
        $form->setTextField('Nim', '');
        $form->setTextField('Prodi', '');
        $form->setTextField('Fakultas', '');
        $form->tampilkanData();

    ?>
</body>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display:block;
        }
        </style>
    <title>Form dengan OPP</title>
</head>
<body>
    <?php
        require_once "FormMahasiswa.php";

        $form = new Form();
        $form->setTextField('Nama', '');
        $form->setTextField('Nim', '');
        $form->setTextField('Prodi', '');
        $form->setTextField('Fakultas', '');
        $form->tampilkanData();

    ?>
</body>
>>>>>>> c6b686ef90bf1be06811da58faad656c807e671a
</html>