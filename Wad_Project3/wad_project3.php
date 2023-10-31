<?php
$con = mysqli_connect("localhost:3308", "root", "","wad_project3");
$result = mysqli_query($con, "SELECT * FROM students");
var_dump(mysqli_fetch_object($result));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan database</title>
</head>
<body>
    <!-- <h3>Daftar Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>001</td>
            <td>1202213344</td>
            <td>Ali Ali</td>
            <td>Sukapura</td> -->
    
</body>
</html>

