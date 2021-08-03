<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<link rel="stylesheet" href="../bootstrap-5.0.0/css/bootstrap.min.css">'; ?>
    <title>Form Update</title>
</head>
<?php include('db.php'); ?>
<body>
    <?php
        $db = new Db;
        $data = $db->getById($_GET['id']);
        if(isset($_POST['update'])) {
            $update = $db->update($_POST);
            if($update == TRUE){
                echo "<script>
                        alert('Berhasil diubah');
                        document.location.href = 'index.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Gagal diubah');
                        document.location.href = 'index.php';
                    </script>";
            }
        }
    ?>
    <div class="container pt-5">
        <div class="col-12">
            <h2 class="text-center">Form Update Data Warga</h2>
            <form action="" method="post" class="my-3">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div class="form-group mt-3">
                    <label class="form-label" for="no_ktp">NO KTP</label>
                    <input type="text" class="form-control" name="no_ktp" id="no_ktp" value="<?= $data['no_ktp']; ?>">
                </div>
                <div class="form-group mt-3">
                    <l class="form-label"abel for="nama">Nama</l>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama']; ?>">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $data['alamat']; ?>">
                </div>
                <div class="form-group mt-3">
                    <lab class="form-label"el for="no_hp">NO HP</lab>
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $data['no_hp']; ?>">
                </div>
                <button type="submit" name="update" class="btn btn-success mt-3">Save</button>
                <a href="index.php" class="btn btn-primary mt-3 float-end">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>