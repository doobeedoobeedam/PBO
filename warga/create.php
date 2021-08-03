<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<link rel="stylesheet" href="../bootstrap-5.0.0/css/bootstrap.min.css">'; ?>
    <title>Form Create</title>
</head>
<?php include('db.php'); ?>
<body>
    <?php
        $db = new Db();
        if (isset($_POST["daftar"])) {
            // var_dump($_POST); die;
            $no_ktp = $_POST['no_ktp'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $insert = $db->insert($no_ktp, $nama, $alamat, $no_hp);
            if($insert > 0){
                echo "<script>
                        alert('Berhasil tersimpan');
                        document.location.href = 'index.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Gagal tersimpan');
                        document.location.href = 'index.php';
                    </script>";
            }
        }
    ?>
    <div class="container pt-5">
        <div class="col-12">
            <h2 class="text-center">Form Registrasi Warga</h2>
            <form action="" method="post" class="mt-2">
                <div class="form-group mt-3">
                    <label class="form-label" for="no_ktp">NO KTP</label>
                    <input type="text" class="form-control" name="no_ktp" id="no_ktp">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="no_hp">NO HP</label>
                    <input type="text" class="form-control" name="no_hp" id="no_hp">
                </div>
                <button type="submit" name="daftar" class="btn btn-success mt-3">Daftar</button>
            </form>
        </div>
    </div>
</body>
</html>