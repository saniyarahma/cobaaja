<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">

    <!-- Bootstrap offline sesuai lokasi file disimpan -->
    <link rel="stylesheet" href="dist/css/bootstrap.css"> 

    <!-- Bootstrap Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">   <!-- Gunakan salah satu cara saja -->
    
    <title>To Do List</title>   <!--Judul Halaman-->
</head>
<body>

    <!-- Load js secara offline sesuai lokasi file disimpan -->
    <script src="dist/js/bootstrap.bundle.js"></script> 
    <!-- Load JS online -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
    <!-- cukup gunakan salah satu saja -->

    <div class="container mt-3">
        <h3>
            To Do List
            <small class="text-muted">
                Catat semua hal yang akan kamu kerjakan disini.
            </small>
        </h3>
        <hr>    

         <!-- Form -->

        <form class="form row" method="POST" action="" name="myForm"">
            <div class="col mb-2">
                <label for="inputIsi" class="form-label fw-bold">
                Kegiatan
                </label>
                <input type="text" class="form-control" name="isi" id="inputIsi" placeholder="Kegiatan">
            </div>
            <div class="col mb-2">
                <label for="inputTanggalAwal" class="form-label fw-bold">
                Tanggal Awal
                </label>
                <input type="date" class="form-control" name="tgl_awal" id="inputTanggalAwal" placeholder="Tanggal Awal">
            </div>
                <div class="col mb-2">
                <label for="inputTanggalAkhir" class="form-label fw-bold">
                Tanggal Akhir
                </label>
                <input type="date" class="form-control" name="tgl_akhir" id="inputTanggalAkhir" placeholder="Tanggal Akhir">
            </div>
            <div class="col mb-2 d-flex">
            <button type="submit" class="btn btn-primary rounded-pill px-3 mt-auto" 
            name="simpan">Simpan</button>
            </div>
        </form>
    
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Awal</th>
                    <th scope="col">Akhir</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Meeting dengan Unit Keuangan</td>
                    <td>2023-05-10</td>
                    <td>2023-05-11</td>
                    <td>
                        <a class="btn btn-warning rounded-pill px-3" type="button" 
                        href="#">Belum</a>
                    </td>
                    <td>
                        <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                        <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Sepedaan</td>
                    <td>2023-05-23</td>
                    <td>2023-05-24</td>
                    <td>
                        <a class="btn btn-success rounded-pill px-3" type="button" 
                        href="#">Sudah</a>
                    </td>
                    <td>
                        <a class="btn btn-info rounded-pill px-3" href="#">Ubah</a>
                        <a class="btn btn-danger rounded-pill px-3" href="#">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>