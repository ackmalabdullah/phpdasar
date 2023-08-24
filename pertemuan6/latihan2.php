<?php
// $mahasiswa = [
//     ["Ackmal", "009876511", "Teknik Informatika", "Ackmal@gmail.com"],
//     ["Sirul", "009888754", "Hukum", "Sirul@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yg kita bua sendiri
$mahasiswa = [
    [
    "nama" => "Ackmal",
    "nrp" => "009876511",
    "email" => "Ackmal@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "gambar" => "ackmal.png" 
    ],
    [
        "nama" => "sirul",
        "nrp" => "009876739",
        "email" => "sirul@gmail.com",
        "jurusan" => "Teknik Kendaraan abot",
        "gambar" => "mal.jpg"
    ],
    [
        "nama" => "Bolang",
        "nrp" => "005876548",
        "email" => "bolang@gmail.com",
        "jurusan" => "Mancing",
        "gambar" => "alam.jpg"
        ]
];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
          <li>No : <?= $mhs["nrp"]; ?></li>
          <li>Email : <?= $mhs["email"]; ?></li>
          <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
         <?php endforeach; ?>
</html>
