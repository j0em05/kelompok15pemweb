<?php
require '../../config/functions.php';
$member = tampil("SELECT * FROM member");

if (isset($_POST['cari'])) {
  $member = carimember($_POST['keyword']);
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../../img/download.png">
  <link rel="stylesheet" type="text/css" href="../../style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/admin.css">

  <title>Daftar Member | E - LEARNIF</title>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#"><img src="../../img/download.png" width="50" height="50"><b>E-LEARNIF</b></a>
    <div class="form-inline my-2 my-lg-0 ml-auto">
      <h5>
       <a href="../../login.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltop" title="Sign Out" href="https://stackoverflow.com/questions/21659691/error-1452-cannot-add-or-update-a-child-row-a-foreign-key-constraint-fails"></i></a> 
      </h5>
    </div>

    </div>
  </nav>

  <div class="row no-gutters mt-5"  style="height: 769px;">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="../../dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="member.php"><i class="fas fa-users mr-2"></i>Daftar Member
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../transaksi/transaksi.php"><i class="fas fa-calendar-week mr-2"></i>Daftar Transaksi
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-users mr-2"></i>DAFTAR MEMBER</h3>
      <hr>
      <table width="100%">
        <tr>
          <td width="73%"><a href="tambah.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data Member</a></td>
          <td>
            <form action="" method="POST" class="form-inline mb-3 ml-auto">
              <input class="form-control ml-2" type="text" name="keyword" placeholder="Masukkan Keyword" autocomplete="off">
              <button class="btn btn-outline-success ml-2" type="submit" name="cari"> Cari </button>
            </form>
          </td>
        </tr>
      </table>


      <table class="table table-striped table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" style="width: 10px">#</th>
            <th scope="col" style="width: 100px">ID Member</th>
            <th scope="col" style="width: 200px">Nama</th>
            <th scope="col" style="width: 200px">Alamat</th>
            <th scope="col" style="width: 70px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($member)) : ?>
            <tr>
              <td colspan="5">
                <p align="center" style="color: darkred;"><b>Data member tidak ditemukan!</b></p>
              </td>
            </tr>
          <?php endif; ?>

          <?php $i = 1;
          foreach ($member as $m) : ?>
            <tr>
              <th class="text-center" scope="row"><?= $i++; ?></th>
              <td><?= $m['id_member']; ?></td>
              <td><?= $m['nama']; ?></td>
              <td><?= $m['alamat']; ?></td>
              <td class="text-center"><a href="detail.php?id_member=<?= $m['id_member']; ?>" class="btn btn-secondary">Lihat Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script type="text/javascript" src="../../style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../style/admin.js"></script>
</body>

</html>
