<?php
    class Db {
        public function __construct(){
            $host = "localhost";
            $dbName = "pbo_warga";
            $username = "root";
            $password = "";
            $this->db = new PDO("mysql:host={$host};dbname={$dbName}", $username, $password);
        }
        public function show(){
            $query = $this->db->prepare("SELECT * FROM data_warga");
            $query->execute();
            $data = $query->fetchAll();
            return $data;
        }
        public function insert($no_ktp, $nama, $alamat, $no_hp){
            $data = $this->db->prepare("INSERT INTO data_warga (no_ktp, nama, alamat, no_hp) 
                                    VALUES (?, ?, ?, ?)");
            $data->bindParam(1, $no_ktp);
            $data->bindParam(2, $nama);
            $data->bindParam(3, $alamat);
            $data->bindParam(4, $no_hp);
            $data->execute();
            return $data->rowCount();
        }
        public function getById($id){
            $query = $this->db->prepare("SELECT * FROM data_warga WHERE id = $id");
            $query->execute();
            return $query->fetch();
        }
        public function update($data){
            $id = $data['id'];
            $no_ktp =  $data['no_ktp'];
            $nama =  $data['nama'];
            $alamat =  $data['alamat'];
            $no_hp =  $data['no_hp'];
            $query = $this->db->prepare(
                "UPDATE data_warga SET no_ktp = '$no_ktp', nama = '$nama', alamat = '$alamat', no_hp = '$no_hp' WHERE id = $id");
            $query->execute();
            return $query->rowCount();
        }
        public function delete($id){
            $query = $this->db->prepare("DELETE FROM data_warga WHERE id = $id");
            $query->execute();
            return $query->rowCount();
        }
    }
?>