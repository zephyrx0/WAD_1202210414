<?php 
require 'function.php';

$psn = $_GET ["id_pemesanan"];

$pesan = read("SELECT * FROM data_reserve WHERE id_pemesanan = '$psn'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        
        echo "
        <script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
        
    }

   
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIAGRAM COFFEE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .customer-header {
            background-color: #2F5231;
        }

        .navbar-brand {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        
        DIAGRAM COFFEE
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id_pemesanan" class="form-label">ID PEMESANAN :</label>
                <input type="text" class="form-control" id="id_pemesanan" name ="id_pemesanan" required disabled value="<?= $mobil ["id_pemesanan"];?>" >
            </div>
            <div class="mb-3">
                <label for="ruangan" class="form-label">RUANGAN :</label>
                <input type="text" class="form-control" id="ruangan" name ="ruangan" required value="<?= $mobil ["ruangan"];?>">
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">WAKTU :</label>
                <input type="text" class="form-control" id="waktu" name ="waktu" required value="<?= $mobil ["waktu"];?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="harga" name ="harga" required value="<?= $mobil ["harga"];?>">
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">UBAH !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>