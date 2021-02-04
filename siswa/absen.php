<?php 
  include '../templateSiswa/header.php';
include '../include.php';
?>

<body id="page-top">
  <div id="wrapper">
    <?php include '../templateSiswa/sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include '../templateSiswa/navbar.php'; Absen(); ?>
        <div class="container">
          <?php  
            $qr       = mysqli_query($conn, 'SELECT `is_absen` FROM `users` WHERE `username`="'.$_SESSION['username'].'" ');
            $row      = mysqli_fetch_assoc($qr);

            if($row['is_absen'] == '1'){
              echo "<h5> SUDAH ABSEN </h5>";
            }
            else{
              ?>
                <div class="row">
                  <button> ABSEN </button>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
      <?php include '../templateSiswa/footer.php'; ?>
    </div>
  </div>
</body>