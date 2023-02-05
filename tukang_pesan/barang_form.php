<?php
include "session_pesanan.php";
include "barang_konek.php";
include "../page_layout/head.php";
  ?>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Barang Baru</a></li>
                    <li class="breadcrumb-item active">Tambah Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <section class="content">
    <div class="container-fluid">
    <!-- ########## DIBAWAH SINI BARU ISI KONTENNYA ################## -->
	   
	  <?php
        include "form_2_barang.php";
    ?>
  
  <!-- ########## KONTENNYA TULIS SAMPAI SEBELUM SINI ################## -->
</div>
</section>
<?php
  include "../page_layout/footer.php";
?>