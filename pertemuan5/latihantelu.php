<?php
$mahasiswa =[
    ["Ackmal", "098789", 
"teknik informatika", "ackmal@gmail.com"],
["mroye", "090676", 
"teknik informatika", "mroye@gmail.com"],
["oye", "009676", 
"teknik informatika", "oye@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
    <head>
       <title>Daftar murid</title>
    </head>
    <body>
        <h1>Daftar mahasiswa</h1>


        <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
           <li>Nama: <?= $mhs [0];?></li>
           <li>NRP: <?= $mhs [1];?></li>
           <li>Jurusan: <?= $mhs [2];?></li>
           <li>Email: <?= $mhs [3];?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html>