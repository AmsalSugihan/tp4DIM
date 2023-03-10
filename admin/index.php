<?php
	include "session_admin.php";
  include "../page_layout/head.php";
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo @$title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo @$title ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
<!-- ########## DIBAWAH SINI BARU ISI KONTENNYA ################## -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>

        <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item">
                <img class="d-block w-100" src="../gambar/big_thumb.jpg" height="400" width="200" alt="EOQ">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="../gambar/Demand.gif" height="400" width="200" alt="Buffer Stock">
              </div>
              
              <div class="carousel-item active">
                <img class="d-block w-100" src="../gambar/16fig11.jpg" height="400" width="200" alt="ReOrder Point">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
    </div>
</section>
<?php
  include "../page_layout/footer.php";
?>