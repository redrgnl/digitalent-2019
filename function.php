<?php 
//echo header DTS
function perkenalan(){
    echo "Selamat Datang, ";
    echo "Pada Acara DIGITAL TALENT <br>";
    echo "2019 <br>";
};

//inputan biodata
function biodata($nama, $alamat, $telepon){
    echo "
    <h2>Nama anda adalah ".$nama."</h2><br>
    <h5>Rumah anda di ".$alamat."</h5><br>
    <h5>Nomor Telepon Anda ".$telepon."<h5/>
    ";
};

//hitung 
function hitungUmur($thn_lahir){
    $now = date("Y");
    $umur = $now - $thn_lahir;
    return $umur;
}

//faktorial
//fungsi rekrusif - pemanggilan function itu sendiri
function faktorial($angka){
    if ($angka < 2){
        return 1;
    } else {
        return ($angka * faktorial($angka - 1));
    }
};

//rumus
//rumus persegi panjang
function persegipanjang($nilai1, $nilai2){
    $result  = $nilai1 * $nilai2;
    return $result;
}

//rumus segitiga
function segitiga($nilai1, $nilai2){
    $result  = ($nilai1 * $nilai2)/2;
    return $result;
}

//rumus belah ketupat
function belahketupat($nilai1, $nilai2){
    $result  = ($nilai1 * $nilai2)/2;
    return $result;
}
?>