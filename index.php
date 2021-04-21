<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img class="navbar-brand" src="http://www.transparentpng.com/thumb/bleach/DhRKK4-bleach-simple.png" alt="" width="30px">
            <a class="navbar-brand" href="#">Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="">Tambah Mahasiswa</a>
                        <a class="nav-link" href="#">Disabled</a>
                        <a class="nav-link" href="#">Disabled</a>
                    </div>
                </div>
        </div>
    </nav>
    <div class="container data-mahasiswa mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No. </th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Memanggil config.php yang sudah kita buat
                include 'config.php';
                // Membuat variabel untuk nomor mahasiswa yang akan diincrement
                $no = 1;
                // Melakukan query
                $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
                //Looping data mahasiswa
                while ($data = mysqli_fetch_array($mahasiswa)) {
                ?>
                    <!-- Menampilkan data mahasiswa ke dalam tabel -->
                    <tr>
                        <!-- Increment nomor baris $no++ -->
                        <td><?php echo $no++; ?></td>
                        <!-- Menampilkan data -->
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <!-- Kolom ini untuk aksi data mahasiswa -->
                        <td>
                            <!-- Aksi Edit Dan Delete, di sini menggunakan btn-sm agar tombolnya kecil -->
                            <!-- Link untuk masuk ke halaman edit -->
                            <!-- edit.php?id=<
                                ?php echo $data['id']; ?> Mengirimkan id dari data mahasiswa ke halaman edit -->
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                            <!-- Link untuk delete berdasarkan id, akan keluar confirm terlebih dahulu -->
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin Akan Menghapus Data Mahasiswa Ini?')">HAPUS</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <div class="footer container-fluid bg-dark">
          <div class="copyright">
            <div class class="row columns " style="margin-right: 0;margin-left: 0;padding: 10px 0;line-height:1; color: #929292;font-size: 12px;display:flex; justify-content: center">
              <span>© 2021 Muhammad Yahya Luqmanulhakim.</span>
            </div>
          </div>
        </div>
     </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>