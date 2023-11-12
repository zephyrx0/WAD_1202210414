<?php

require 'function.php';

$psn = $_GET ["id_pemesanan"];


if ( hapus($psn) > 0) {
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = '../Latihan 1/index.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DIHAPUS');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    
}




?>