<?php
$conn = mysqli_connect("localhost:3308","root","","diagram");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $pesanan = $data ["id_pemesanan"];
    $ruangan = $data["ruangan"];
    $waktu = $data ["waktu"];
    $harga = $data ["harga"];

    $query = "INSERT INTO data_reserve VALUES ('$pesanan','$ruangan','$waktu','$harga')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function hapus($psn){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_reserve WHERE id_pemesanan = '$psn'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>