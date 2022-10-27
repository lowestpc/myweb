<!DOCTYPE html>
<html>
<head>
<title>Hasil</title>
</head>
<body>

Nama depanmu adalah <?php echo $_POST["namaDepan"]; ?><br>
Nama belakangmu adalah <?php echo $_POST["namaBelakang"]; ?><br>
Kelaminmu adalah <?php echo $_POST["jenisKelamin"]; ?><br>
Kendaraan yang kamu miliki adalah 
<?php 
    
foreach($_POST["kendaraan"] as $jumlah)
    {
        echo $jumlah ;
    }

?>

</body>
</html> 