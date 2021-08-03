<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<link rel="stylesheet" href="../bootstrap-5.0.0/css/bootstrap.min.css">'; ?>
    <title>Detail</title>
</head>
<?php include('db.php'); ?>
<body>
    <?php
        $db = new Db;
        $data = $db->getById($_GET['id']);
    ?>
    <div class="container pt-5">
        <div class="col-12">
            <h2 class="text-center">Detail Warga</h2>
            <table class="table table-striped table-bordered mt-4">
                <tr>
                    <td>ID</td>
                    <td><?= $data['id']; ?></td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td><?= $data['no_ktp']; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?= $data['nama']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $data['alamat']; ?></td>
                </tr>
                <tr>
                    <td>No KTP</td>
                    <td><?= $data['no_hp']; ?></td>
                </tr>
                <tr>
                    <td><a href="index.php" class="btn btn-primary">Kembali</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>