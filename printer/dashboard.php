<?php include 'layout/navbar.php'; ?>
<?php 

$data = query("SELECT * FROM transaksi WHERE name ='{$_SESSION['name']}'");

?>

<?php if (!isset($_SESSION["username"])) :
    echo "<script>
           alert('You are not Logged in, Please Login First!');
           window.location = 'login/index.php';
           </script>";
endif; ?>



<div class="container">

    <div class="data-transaksi">
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Produk</th>
            <th>Alamat</th>
            <th>Harga Produk</th>
            <th>Foto Produk</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["name"]; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["alamat"]; ?></td>
                <td>Rp <?= $data["harga_produk"]; ?></td>
                <td><img src="foto/<?= $data["foto_produk"]; ?>" width="80"></td>
                <td><?= $data["status"]; ?></td>
                <td>
                    <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="detail">Detail Transaksi</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>


</div>