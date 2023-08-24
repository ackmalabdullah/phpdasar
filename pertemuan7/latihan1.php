<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "sigit yy",
    "nrp" => "009876511",
    "email" => "sirul@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "alam.jpg" 
    ],
    [
        "nama" => "komeng",
        "nrp" => "009876739",
        "email" => "komeng@gmail.com",
        "jurusan" => "Teknik Otomotif",
        "gambar" => "ackmal.png"
    ]
 ];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
      <title>GET</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
        </ul>
      
 </body>
 </html>
