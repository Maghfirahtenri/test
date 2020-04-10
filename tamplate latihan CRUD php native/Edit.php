<?php
include_once('koneksi.php');
if (isset ($_POST['edit'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kontak = $_POST['kontak'];

    $ambil = mysqli_query($panggildb, "UPDATE datamahasiswa SET nim = '$nim', nama = '$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kontak='$kontak' WHERE id=$id ");
    header("Location:index.php");
}

?>
<?php
$id=$_GET['id'];
$ambil=mysqli_query($panggildb, "SELECT * FROM datamahasiswa WHERE id=$id");
while($ambilData=mysqli_fetch_array($ambil)){
    $nim = $ambilData['nim'];
    $nama = $ambilData['nama'];
    $tempat_lahir = $ambilData['tempat_lahir'];
    $tanggal_lahir = $ambilData['tanggal_lahir'];
    $kontak = $ambilData['kontak'];

}

?>
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
        <form action="Edit.php" method="post" name="update_user">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">NIM</label>
                    <input type="hidden" name="id">
                    <input type="text " class="form-control" id="inputNim" placeholder="Masukkan nim..." name="nim" value =<?php echo $nim;?>>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama..." name="nama" value =<?php echo $nama;?>>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Kontak</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="Masukkan kontak..." name="kontak" value =<?php echo $kontak;?>>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Tempat</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Masukkan tempat lahir..." name="tempat_lahir" value =<?php echo $tempat_lahir;?>>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Tanggal lahir</label>
                    <input type="date" class="form-control" id="inputCity" name="tanggal_lahir" value =<?php echo $tanggal_lahir;?>>
                </div>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" class="btn btn-primary" name="edit" value="Update" >Submit</button>
        </form>
    </div>
</body>

</html>
