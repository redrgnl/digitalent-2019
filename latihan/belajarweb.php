<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Validasi</title>
    </head>
    <body>
        <h1>Membuat Form Validasi Dengan PHP - 15 Juli 2019</h1>
        <hr>
        <h4>Masukkan Nama Anda</h4>
        <?php 
        $nama = "";
        $email = "";
        $alamat = "";
        $telepon = "";
        $warn_nama = "";
        $warn_email = "";
        $warn_alamat = "";
        $warn_telepon = "";
        ?>
        <form action="" method="post">
            <div style="margin-bottom: 10px">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required maxlength="30">
            </div>
            <div style="margin-bottom: 10px">
                <label for="email">Email :</label>
                <input type="text" name="email" required maxlength="30">
            </div>
            <div style="margin-bottom: 10px">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" required maxlength="30">
            </div>
            <div style="margin-bottom: 10px">
                <label for="telepon">Telepon :</label>
                <input type="number" name="telepon" min="" required maxlength="5">
            </div>
            <input type="submit" value="cek" name="check" style="width: 100px">
        </form>
        <?php
        if (isset($_POST['check'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];
        
            if ($nama == ""){
                $warn_nama = "Gak Punya Nama?";
            } if ($email == ""){
                $warn_email = "Netijen";
            } if ($alamat == ""){
                $warn_alamat = "Anak Kos";
            } if ($telepon == ""){
                $warn_telepon = "Gak Punya";
            }
        }
        ?>
        <hr>
        <div>
            <div style="margin-bottom: 10px">
                <label for="nama">Nama :</label>
                <input type="text" value="<?php echo $nama?>">
                <label style="color: red" for="nama"><?php echo $warn_nama?></label>
            </div>
            <div style="margin-bottom: 10px">
                <label for="email">Email :</label>
                <input type="text" value="<?php echo $email?>">
                <label style="color: red" for="email"><?php echo $warn_email?></label>
            </div>
            <div style="margin-bottom: 10px">
                <label for="alamat">Alamat :</label>
                <input type="text" value="<?php echo $alamat?>">
                <label style="color: red" for="alamat"><?php echo $warn_alamat?></label>
            </div>
            <div style="margin-bottom: 10px">
                <label for="telepon">Telepon :</label>
                <input type="text" value="<?php echo $telepon?>">
                <label style="color: red" for="telepon"><?php echo $warn_telepon?></label>
            </div>
        </div>
    </body>
</html>