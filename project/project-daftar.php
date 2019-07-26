<?php
include 'connection.php';

$query = "SELECT data_siswa.id_siswa, data_siswa.nama, data_siswa.alamat, data_siswa.jenis_kelamin, data_siswa.sekolah_asal, agama.agama
          FROM data_siswa JOIN agama
          ON data_siswa.id_agama = agama.id_agama 
         ";

$siswa = mysqli_query($mysqli, $query);

$jumlah = mysqli_query($mysqli, "SELECT count(*) as jumlah FROM data_siswa");
$jumlahsiswa = mysqli_fetch_assoc($jumlah);

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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

<div style="margin-left: 0px; margin-right: 0px">
  <div class="row">
    <div class="col-md-2" style="background-color: #aaa; padding: 0px;">
      <div class="sidebar-layout">
        <div class="nav-head"><h5>MENU</h5>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class=""></i>Form Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Mahasiswa</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-10" style="margin-top:30px; margin-bottom:30px;">
      <h2>Politeknik Negeri Jember | Mahasiswa Baru</h2>
      <p>Daftar Mahasiswa Politeknik Negeri Jember</p>
      <div class="card">
        <div class="card-body">
          <table class="table table-striped table-no-border">
            <thead>
              <th>ID</th>  
              <th>Nama</th>  
              <th>Alamat</th>  
              <th>Jenis Kelamin</th>  
              <th>Agama</th>  
              <th>Sekolah Asal</th>
              <th>Update</th>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($siswa as $row){
                  if ($row['jenis_kelamin'] == "L") {
                      $kelamin = "Laki-Laki";
                  } else {
                      $kelamin = "Perempuan";
                  }
                  echo "
                    <tr>
                      <td>".$no++."</td>
                      <td>".$row['nama']."</td>
                      <td>".$row['alamat']."</td>
                      <td>".$kelamin."</td>
                      <td>".$row['agama']."</td>
                      <td>".$row['sekolah_asal']."</td>
                      <td>
                        <button type='button' class='btn btn-success'><i class='fa fa-gear'></i></button>
                        <button type='button' class='btn btn-danger'><i class='fa fa-trash'></i></button>
                      </td>
                    </tr>
                  ";
                }
              ?>
            </tbody>
          </table>
          <hr>
          <h5>Jumlah Siswa <?php echo $jumlahsiswa['jumlah']?></h5>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h3>It's Not a Bug. It's an Undocumented Feature</h3>
  <p>unt in culpa qui officia deserunt mollit anim id est</p> 
</div>

</body>
</html>