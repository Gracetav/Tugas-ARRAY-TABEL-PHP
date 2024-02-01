<?php

$dataPesertadidik = [
    [
    "namalengkap" => "Gracetavia Abigaell",
    "kelas" => "XI-IPS-3",
    "alamat" => "Jl.Tmiaran Indah 2",
    "nisn" => "21050766",
    "nomor_whatsapp" => "082242352880",
    "hobi" => "Desain Baju",
    "cita_cita" => "Artist"
],
[
    "namalengkap" => "Afrizal Dwi Handika",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl Kesahjerateraan No 47 A",
    "nisn" => "24040704",
    "nomor_whatsapp" => "0895321015259",
    "hobi" => "Main Game",
    "cita_cita" => "Pemenang Fncs"

] ,
[
    "namalengkap" => "Messi",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Painting",
    "cita_cita" => "Idol"
],
[
    "namalengkap" => "Agung",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Main Bola",
    "cita_cita" => "Main Di U-18"
],
[
    "namalengkap" => "Muhammad Fahrezy",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Tidur",
    "cita_cita" => "Psikiater"
],
[
    "namalengkap" => "Naufal Putra Ramadhan",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Cod-an",
    "cita_cita" => "Punya E-Commerse Sendiri"
],
[
    "namalengkap" => "Irza",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Main Game",
    "cita_cita" => "Memiliki Istri Ex Memb JKT-48"
],
[
    "namalengkap" => "Akbir",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Main ff",
    "cita_cita" => "Punya SG OPM"
],
[
    "namalengkap" => "Afrizal",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Olahraga",
    "cita_cita" => "Dokter"
],
[
    "namalengkap" => "Afrizal",
    "kelas" => "X-RPL-2",
    "alamat" => "Jl. Raya No. 123",
    "nisn" => "1234567890",
    "nomor_whatsapp" => "081234567890",
    "hobi" => "Olahraga",
    "cita_cita" => "Pesepak Bola"
],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .tabel{
        color: rgb(red, green, blue);
    }
</style>
<body>

<table border="3" cellpadding="15" cellspacing="0"  class="tabel">
    <tr>
        <th>Nama Lengkap</th>
        <th>Kelas </th>
        <th>Alamat</th>
        <th>Nisn</th>
        <th>Nomor Whatsapp</th>
        <th>Hobi</th>
        <th>Cita_Cita</th>
    </tr>
    <?php foreach($dataPesertadidik as $database) : ?>
    <tr>
        <td><?= $database["namalengkap"] ?></td>
        <td><?= $database["kelas"] ?></td>
        <td><?= $database["alamat"] ?></td>
        <td><?= $database["nisn"] ?></td>
        <td><?= $database["nomor_whatsapp"] ?></td>
        <td><?= $database["hobi"] ?></td>
        <td><?= $database["cita_cita"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>