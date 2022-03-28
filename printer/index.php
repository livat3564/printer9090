<?php include 'layout/navbar.php'; ?>
<?php 

$data = query("SELECT * FROM produk");

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    .header {
      position: fixed,
        z-index: 100000,
        height: 200px;
      top: 0px
    }
  </style>

<body>
  <div class="header">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://id.canon/media/image/2020/03/17/8b37a7b1757941f888aaa560dfd1a27a_PIXMA_GSeries2019_WebBanner_Bahasa.jpg"
            alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" 
          src="https://id.canon/media/image/2021/04/15/5acb72fd493e4095b877582ee2e53399_2021-04-1414+Resize+Printer+Ink+Tank+Juara+1920+x+750+px_1.jpg"
           alt="First slide"> 
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" 
          src="https://id.canon/media/image/2022/02/16/298550598cd4424eb8d145172cb957ba_2022-02-0000++Materi+Promo+PIXMA+G+Series+Maret+-+id.canon.jpg"
            alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<div class="container">
    <div class="text-produk">
        <h2>Produk Terbaru</h2>
    </div>

    <div class="wrapper-produk">
        <?php foreach($data as $produk) : ?>
        <div class="produk">
            <a href="detail.php?id=<?= $produk["id_produk"]; ?>">
                <img src="foto/<?= $produk["foto_produk"]; ?>">
                <h2><?= $produk["nama_produk"]; ?></h2>
                <p>Rp <?= number_format($produk["harga_produk"]); ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
