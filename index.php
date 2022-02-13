<?php
    $host = "172.0.0.1";
    $username = "root";
    $password = "abcd";
    $database = "Trucorp";
	$port = "3306";
    $con = new mysqli($host,$username,$password,$database,$port);
    if($con->connect_error){
        die(mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table, th, td {
    border: 2px solid;
    border-collapse: collapse;
    padding: 5px;
    text-align: center;
    }
</style>
</head>

<body>
    <table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
    </tr>
    <?php 

    $qry = "SELECT * FROM user";
    $res = $con->query($qry);
    while($row = $res->fetch_assoc()){
    
    ?>

    <tr>
        <td id="id"><?=$row['ID']?></td>
        <td id="id"><?=$row['nama']?></td>
        <td id="id"><?=$row['alamat']?></td>
        <td id="id"><?=$row['jabatan']?></td>

    </tr>
    <?php 
    }
    ?>
    </table>
</body>
</html>
