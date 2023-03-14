<link rel="stylesheet" href="assets/style.css">
<title>Upload Image</title>

<?php
include "koneksi.php";
$qry = $koneksi->query("SELECT * FROM user");
?>

<div class="container">
    <a href="tambahData.php" class="add">Tambah Data</a>
    <div class="content">
        <?php if($qry->num_rows > 0){
            while($data = $qry->fetch_assoc()){?>
                <div class="card">
                    <!-- <img src="https://dummyimage.com/600x400/000/fff" alt=""> -->
                    <img src="assets/images/<?= $data['profile'];?>" alt="">
                    <div class="card-body">
                        <p class="title"><?= $data['name'];?></p>
                        <a href="detail.php?id=<?= $data['id_user'];?>" class="detail">Detail</a>
                        <a href="delete.php?id=<?= $data['id_user'];?>" class="detail">Hapus</a>
                    </div>
                </div>
            <?php }?>
        <?php }else{ 
            echo "Tidak Ada Data";
        }?>
    </div>
</div>