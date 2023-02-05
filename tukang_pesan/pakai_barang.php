<?php
	include "session_pesanan.php";
  include "../page_layout/head.php";
  ?>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pakai Pesanan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pesanan</a></li>
                    <li class="breadcrumb-item active">Pakai Pesanan</li>
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
		include "pakai_barang_input.php";
	?>
    
    
<!-- ########## KONTENNYA TULIS SAMPAI SEBELUM SINI ################## -->
</div>
</section>
<?php
  include "../page_layout/footer.php";
?>