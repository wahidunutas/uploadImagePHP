<link rel="stylesheet" href="assets/style.css">

<div class="container">
    <h3>Tambah Data</h3>
    <form method="post" enctype="multipart/form-data">
        <div class="forms">
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div class="forms">
            <label for="">Profile</label>
            <input type="file" name="images" id="image">
        </div>
        <div id="preview" class="preview"></div>

        <div class="buttons">
            <button class="btn_tambah" type="submit" name="submit">Tambah</button>
            <a href="index.php" class="btn_kembali">Kembali</a>
        </div>
    </form>
</div>

<script src="assets/script.js"></script>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $image = $_FILES['images']['name'];
    $tmp = $_FILES['images']['tmp_name'];

    $collections = $_FILES['collection']['name'];
    $tmp_col = $_FILES['collection']['tmp_name'];

    $timestamp = time();
    $newName = $timestamp.$image;

    $koneksi->query("INSERT INTO user(name, profile)VALUES('$name', '$newName')");
    $location = 'assets/images/'.$newName;
    move_uploaded_file($tmp, $location);

    echo "<script>alert('Data berhasil ditambahkan');window.location.replace('index.php');</script>";
}
?>