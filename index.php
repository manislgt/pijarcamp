<?php
    include 'koneksi.php';

    $query = "SELECT * FROM produk;";
    $sql = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>

    <title>belajar_crud</title>
</html>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD - BS5
          </a>
        </div>
      </nav>

      <!-- JUDUL -->
      <div class="container">
        <h1 class="mt-4">PijarCamp</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data yang telah disimpan di database</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">Create Read Update Delete</cite>
        </figcaption>
      </figure>
      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
                  while($result = mysqli_fetch_assoc($sql)){
            ?>        
                  
            <tr>
              <td>
              <?php echo $result['nama_produk']; ?></td>
              <td><?php echo $result['keterangan']; ?></td>
              <td><?php echo $result['harga']; ?></td>
              <td><?php echo $result['jumlah']; ?></td>
            </tr>
          <?php
           }
           ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>