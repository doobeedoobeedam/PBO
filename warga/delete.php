<?php
    include('db.php');
    $db = new Db;
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $delete = $db->delete($id);
        if($delete == TRUE){
            echo "<script>
                    alert('Berhasil dihapus');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo "<script>
                    alert('Gagal dihapus');
                    document.location.href = 'index.php';
                </script>";
        }
    }
?>