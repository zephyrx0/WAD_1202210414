<?php 
require 'function.php';



 if (isset( $_POST ["submit"])) {
    $pesanan = $_POST ["id_pemesanan"];
    $ruangan = $_POST["ruangan"];
    $waktu = $_POST ["waktu"];
    $harga = $_POST ["harga"];

    $query = "INSERT INTO data_mobil VALUES ('$pesanan','$ruangan','$waktu','$harga')";

    mysqli_query($conn,$query);
    
    
    
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERPATI CAR WASH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        
        MERPATI CAR WASH
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="no_polisi" class="form-label">NOMOR POLISI :</label>
                <input type="text" class="form-control" id="no_polisi" name ="no_polisi" required>
            </div>
            <div class="mb-3">
                <label for="tipe_mobil" class="form-label">TIPE MOBIL :</label>
                <input type="text" class="form-control" id="tipe_mobil" name ="tipe_mobil" required>
            </div>
            <div class="mb-3">
                <label for="merek_mobil" class="form-label">MEREK MOBIL :</label>
                <input type="text" class="form-control" id="merek_mobil" name ="merek_mobil" required>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">WARNA :</label>
                <input type="text" class="form-control" id="warna" name ="warna" required>
            </div>
            <div class="mb-3">
                <label for="pemilik" class="form-label">PEMILIK :</label>
                <input type="text" class="form-control" id="pemilik" name ="pemilik" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>