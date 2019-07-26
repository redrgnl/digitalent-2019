<?php 
include 'connection.php';

$query = "SELECT * FROM printer";
$data = mysqli_query($mysqli, $query);
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Database Printer</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:30px; margin-left: 0px; margin-right: 0px;">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>No.</th>  
            <th>Merk</th>  
            <th>Warna</th>  
            <th>Jumlah</th>  
          </tr>  
        </thead>  
        <tbody>
        <?php
          $no = 1;
          foreach ($data as $row){
            echo "
              <tr>
                <td>".$no++."</td>
                <td>".$row['nama_merk']."</td>
                <td>".$row['warna']."</td>
                <td>".$row['jumlah']."</td>
              </tr>
            ";
          }
        ?>
        </tbody>  
      </table>
      <button type="button"><a style="text-decoration: none" href="index.html">Form Tambah Data</a></button>
    </div>
  </div>  
</div>
</body>
</html>