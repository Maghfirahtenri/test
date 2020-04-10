<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/584999f8a5.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Universitas Hasanuddin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="form.php">Tambah Data</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:20px">
        <h2 style="margin-bottom:40px">Tambah Data</h2>
        <form action="index.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">NIM</label>
                    <input type="hidden" name="id">
                    <input type="text " class="form-control" id="inputNim" placeholder="Masukkan nim..." name="nim">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama..." name="nama">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Kontak</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="Masukkan kontak..." name="kontak">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Tempat</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Masukkan tempat lahir..." name="tempat_lahir">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Tanggal lahir</label>
                    <input type="date" class="form-control" id="inputCity" name="tanggal_lahir">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
    </div>
</body>

</html>