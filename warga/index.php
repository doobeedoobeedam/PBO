<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo '<link rel="stylesheet" href="../bootstrap-5.0.0/css/bootstrap.min.css">'; ?>
    <title>Document</title>
</head>
<?php include('db.php'); ?>
<body>
    <?php
        $db = new Db;
        $data = $db->show();
    ?>
    <div class="container pt-5">
        <div class="col-12">
            <h2 class="float-start mb-4">Data Warga</h2>
            <a href="create.php" class="btn btn-primary float-end mb-4">Tambah Data Baru</a>
            <table class="table table-bordered mt-5">
                <thead class="text-center">
                    <th>No</th>
                    <th>NO. KTP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>NO. HP</th>
                    <th>Action</th>
                </thead>
                <?php $no = 1; ?>
                <?php foreach ($data as $warga) : ?>
                    <tbody class="text-center">
                        <td><?= $no++; ?></td>
                        <td><?= $warga['no_ktp']; ?></td>
                        <td><?= $warga['nama']; ?></td>
                        <td><?= $warga['alamat']; ?></td>
                        <td><?= $warga['no_hp']; ?></td>
                        <td>
                            <a class="btn btn-success" href="detail.php?id=<?= $warga['id']; ?>">detail</a>
                            <a class="btn btn-warning" href="update.php?id=<?= $warga['id']; ?>">change</a>
                            <a class="btn btn-danger" href="delete.php?id=<?= $warga['id']; ?>">delete</a>
                        </td>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>