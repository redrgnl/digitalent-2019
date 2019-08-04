<?php
include 'connection.php';

//get id from link
$id = $_GET['id'];

$querysiswa = "SELECT data_siswa.id_siswa, data_siswa.nama, data_siswa.alamat, data_siswa.jenis_kelamin, data_siswa.sekolah_asal, agama.agama
          FROM data_siswa JOIN agama
          ON data_siswa.id_agama = agama.id_agama AND data_siswa.id_siswa = '$id' 
         ";

$resultsiswa = mysqli_query($mysqli, $querysiswa);

//get data from data_siswa by id
while ($datasiswa = mysqli_fetch_array($resultsiswa)) {
    $idsiswa = $datasiswa['id_siswa'];
    $namasiswa = $datasiswa['nama'];
    $alamatsiswa = $datasiswa['alamat'];
    $kelaminsiswa = $datasiswa['jenis_kelamin'];
    $sekolahsiswa = $datasiswa['sekolah_asal'];
    $agamasiswa = $datasiswa['agama'];
}

//query select id agama by nama agama
$queryagama = "SELECT id_agama FROM agama WHERE agama = '$agamasiswa'";

$resultagama = mysqli_query($mysqli, $queryagama);

//get data from agama
while ($dataagama = mysqli_fetch_array($resultagama)) {
    $idagama = $dataagama['id_agama'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pendaftaran Mahasiswa | Polije</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
    
  <style>
  .sidebar-layout {
    height: 100%;
    background-color: #aaa;
    padding-left: 10px; 
  }
  .nav-head {
    background-color: #16ecf2;
    padding: 10px;  
    text-align: center;
  }
  .nav-item a {
    padding: 15px;
    display: block;
    color: black;
    text-decoration: none;
  }
  .nav-item a.active {
    background-color: #4CAF50;
    color: white;
  }
  .nav-item a:hover:not(.active) {
    background-color: #555;
    color: white;
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>POLITEKNIK NEGERI JEMBER</h1>
  <p>Kementerian Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia</p> 
</div>

<div style="margin-left: 0px; margin-right: 30px">
  <div class="row">
    <div class="col-md-2" style="background-color: #aaa; padding: 0px;">
      <div class="sidebar-layout">
        <div class="nav-head"><h5>MENU</h5>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="project-index.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project-daftar.php">Daftar Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project-form.html"><i class=""></i>Form Pendaftaran</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-10" style="margin-top:30px; margin-bottom:30px;">
      <h3>Form Edit Mahasiswa Baru</h3>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <form action="update-mahasiswa.php" method="post">
        <div class="card">
          <div class="card-body">
            <input type="hidden" name="InputId" value="<?php echo $idsiswa?>">
            <div class="form-group">
              <label for="InputNama">Nama</label>
              <input type="text" class="form-control" id="InputNama" name="InputNama" placeholder="Nama" value="<?php echo $namasiswa?>" maxlength="20">
            </div>
            <div class="form-group">
              <label for="InputAlamat">Alamat</label>
               <textarea type="text" class="form-control" id="InputAlamat" name="InputAlamat" placeholder="Alamat" style="height: 100px" maxlength="50"><?php echo $alamatsiswa?></textarea>
            </div>
            <div class="form-group">
              <label for="InputJenisKelamin">Jenis Kelamin: </label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="InputJenisKelaminL" name="InputJenisKelamin" value="L" <?php if ($kelaminsiswa == "L") {?> checked="checked" <?php }?>>
                <label class="custom-control-label" for="InputJenisKelaminL">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="InputJenisKelaminP" name="InputJenisKelamin" value="P" <?php if ($kelaminsiswa == "P") {?> checked="checked" <?php }?>>
                <label class="custom-control-label" for="InputJenisKelaminP">Perempuan</label>
              </div>
            </div>
            <div class="form-group">
              <label for="InputAgama">Agama</label>
              <select class="form-control" id="InputAgama" name="InputAgama" required>
                <option value="">Select Gender</option>
                <option value="1" <?php if ($idagama == "1") {?>selected="selected" <?php }?>>Islam</option>
                <option value="2" <?php if ($idagama == "2") {?>selected="selected" <?php }?>>Kristen</option>
                <option value="3" <?php if ($idagama == "3") {?>selected="selected" <?php }?>>Katolik</option>
                <option value="4" <?php if ($idagama == "4") {?>selected="selected" <?php }?>>Hindu</option>
                <option value="5" <?php if ($idagama == "5") {?>selected="selected" <?php }?>>Budha</option>
                <option value="6" <?php if ($idagama == "6") {?>selected="selected" <?php }?>>Kong Hu Cu</option>
              </select>
            </div>
            <div class="form-group">
              <label for="InputSekolah">Sekolah Asal</label>
              <input class="form-control" id="InputSekolah" name="InputSekolah" placeholder="Sekolah Asal" value="<?php echo $sekolahsiswa?>" maxlength="30">
            </div>
            <div class="float-left"><button class="btn btn-primary" type="submit" name="submit">Simpan</button></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h3>It's Not a Bug. It's an Undocumented Feature</h3>
  <p>unt in culpa qui officia deserunt mollit anim id est</p> 
</div>

</body>
</html>