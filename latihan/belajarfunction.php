<?php
include '../function.php';
?>
<meta charset="utf-8">
<html>
    <head>
        <title>Belajar Function</title>
    </head>
    <body>
        <!-- Procedure -->
        <?php perkenalan();?>
        <!-- End Procedure -->
        <hr>
        <h3>Biodata</h3>
        <div>
            <!-- Procedure -->
            <h5>Masukkan Data :</h5>
            <form action="" method="post">
            <div>
                <label>Nama :</label>
                <input type="text" name="nama" style="margin-bottom: 10px;">
            </div>
            <div>
                <label>Alamat :</label>
                <input type="text" name="alamat" style="margin-bottom: 10px;">
                <quote>asdalskdhaskdsklas</quote>
            </div>
            <div>
                <label>Telepon :</label>
                <input type="text" name="telepon" style="margin-bottom: 10px;">
            </div>
            <div>
                <button type="submit" name="biodata">Save</button>
            </div>
            </form>
            <!-- End Procedure -->
        </div>
        <hr>
        <div>
            <?php 
                if(isset($_POST['biodata'])){
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];
                    
                    echo biodata($nama, $alamat, $telepon);
                }
            ?>
        </div>
        <hr>
        <h3>Perhitungan Umur</h3>
        <!-- Function - return value -->
        <form action="" method="post">
        <div>
            <label>Masukkan Tahun Lahir :</label>
            <input type="text" name="umur" style="margin-bottom: 10px;">
        </div>
        <div>
            <button type="submit" name="hitungumur">Save</button>
        </div>
        </form>
        <?php 
            if(isset($_POST['hitungumur'])){
                $umur = $_POST['umur'];
                
                echo "<h1>Umur Saat Ini ".hitungUmur($umur)."</h1>";
            }
        ?>
        <!-- End Function - return value -->
        <hr>
        <h3>Perhitungan Faktorial</h3>
        <div>
            <form action="" method="post">
            <div>
                <label>Masukkan Nilai :</label>
                <input type="text" name="nilai" style="margin-bottom: 10px;">
            </div>
            <div>
                <button type="submit" name="faktorial">Save</button>
            </div>
            </form>
            <?php
                if (isset($_POST['faktorial'])){
                    $nilai = $_POST['nilai'];
                    
                    echo 
                        "
                            <h5>Faktorial Nilai ".$nilai."</h5>
                            <h1>".faktorial($nilai)."</h1>
                        ";
                }
            ?>
        </div>
        <hr>
        <h3>Aplikasi Rumus Bangun Datar</h3>
        <div>
            <form action="" method="post">
            <div>
                <label>Nilai 1 </label>
                <input type="number" name="sisi1" min="1" style="margin-bottom: 10px;" required>
            </div>
            <div>
                <label>Nilai 2 </label>
                <input type="number" name="sisi2" min="1" style="margin-bottom: 10px;" required>
            </div>
            <div>
                <label>Rumus Bangun </label>
                <select required name="select-rumus">
                    <option value="">Pilih Rumus</option>
                    <option value="1">Persegi Panjang</option>
                    <option value="2">Segitiga</option>
                    <option value="3">Belah Ketupat</option>
                </select>
                <button type="submit" name="rumus">Hitung</button>
            </div>
            </form>
            <?php
                if (isset($_POST['rumus'])){
                    $nilai1 = $_POST['sisi1'];
                    $nilai2 = $_POST['sisi2'];
                    $rumus = $_POST['select-rumus'];
                    
                    if ($rumus == 1){
                        echo "<p>Hasil Perhitungan Rumus Persegi Panjang </p>";
                        echo "<p>Panjang = ".$nilai1." Cm || Dan Lebar = ".$nilai2." Cm </p>";
                        echo "<p>Adalah = ".persegipanjang($nilai1, $nilai2)." Cm2</p>";
                    } else if ($rumus == 2){
                        echo "<p>Hasil Perhitungan Rumus Segitiga </p>";
                        echo "<p>Alas = ".$nilai1." Cm || Dan Tinggi = ".$nilai2." Cm</p>";
                        echo "<p>Adalah = ".segitiga($nilai1, $nilai2)." Cm2</p>";
                    } else if ($rumus == 3){
                        echo "<p>Hasil Perhitungan Rumus Belah Ketupat </p>";
                        echo "<p>Diagonal 1 = ".$nilai1." Cm || Dan Diagonal 2 = ".$nilai2." Cm </p>";
                        echo "<p>Adalah = ".belahketupat($nilai1, $nilai2)." Cm2</p>";
                    }
                }
            ?>
        </div>
    </body>
</html>