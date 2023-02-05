<?php
	include "pesanan_konek.php";
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
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
  <!-- ########## DIBAWAH SINI BARU ISI KONTENNYA ################## -->

<!-- mulai form -->
  <div class="card">
    <div class="card-header">
        <h2 class="card-title">Form Input Pesanan</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    		<form class="form-horizontal" method="post" action="pesanan_simpan.php">
                
                <div class="form-group">
                	<label for="nama pemesan" class="col-md-3"> Nama Supplier  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="Nama Pemesan" placeholder="Nama atau Instansi Pemesan" name="nama_pemesan">
                    </div>
                </div>
                <div class="form-group">
                	<label for="nama_barang" class="col-md-3"> Nama Barang  </label>
                	<div class="col-md-7">
                    <select class="form-control" name="id_barang" id="nama_barang">
                      <option value="">----- Pesanan Bahan Baku -----</option>
                        <?php
                            foreach($DaftarBarang as $dri){
                              echo '<option value="'.$dri['id_barang'].'">'.$dri['nama_barang'].'</option>';
                            }
                          ?>  	
                    </select>
                  </div>
                </div>
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Jumlah Pesanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pesanan" placeholder="Jumlah Pesanan Barang dalam angka" name="jumlah_pesanan">
                    </div>
                </div>
                <br>
                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-3"> Waktu Tunggu Pesanan  </label>
                	<div class="col-md-7">
                    <input type="text" class="form-control" id="lead time" placeholder="Waktu Tunggu Pesanan" name="lead_time">
                  </div>
                </div>
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                    <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                    <input type="reset" class="btn btn-danger" name="batal" value="batal">
                  </div>
                </div>
    		  </form>
        </div>
    <!-- /.card-body -->
    </div>
 
<!-- ########## KONTENNYA TULIS SAMPAI SEBELUM SINI ################## -->
</div>
</section>
<?php
  include "../page_layout/footer.php";
?>