<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyApp | VAKSIN</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Peserta Vaksin</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria- controls="navbarSupportedContent"
                    aria-expanded="false" aria- label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link" aria- current="page" href="index.php">Home</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Peserta Vaksin</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <a href="tambah.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col">

                <table class="table table-striped table-hover table-sm">

                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM pasien");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $row['idPasien']; ?>
                            </td>
                            <td>
                                <?= $row['nama']; ?>
                            </td>
                            <td>
                                <?= $row['jk']; ?>
                            </td>
                            <td>
                                <?= $row['alamat']; ?>
                            </td>
                            <td><a href="edit.php?edit=<?= $row['idPasien']; ?>" class="btn btn-warning btn-sm">Edit</a> <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin ingin menghapus data?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="koneksi.php?idPasien=<?= $row['idPasien']; ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
    </div>
  </div>
</div></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>