<?php
	include "session_pesanan.php";
	include "pesanan_konek.php";
    include "../page_layout/head.php";
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pesanan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pesanan</a></li>
                    <li class="breadcrumb-item active">Data Pesanan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
    <!-- ########## DIBAWAH SINI BARU ISI KONTENNYA ################## -->
  <div class="card">
    <div class="card-header">
        <h2 class="card-title">Data Pesanan</h2>
        <a href="pesanan_form.php" class="btn btn-outline-primary float-right">
            <i class="fas fa-plus"></i> Tambah Pesanan
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped list_datatable2">
            <thead>        
                <tr>
                    <th>NO.</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Pesan Barang</th>                        
                    <th>Satuan</th>
                    <th>Jumlah Total</th>
                    <th>Waktu Tunggu</th>
                    <th>Pemakaian Barang</th>
                    <th>Pakai Barang</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php
                    foreach ($DaftarPesanan as $key => $data) {
                ?>
                    <td> <?php echo $key+1 ?> </td>
                    <td> <?php echo $data["nama_pemesan"] ?> </td>
                    <td> <?php echo $data["nama_barang"] ?> </td>
                    <td align="center"> <?php echo $data["jumlah_pesanan"] ?> </td>
                    <td align="center"> <?php echo $data["satuan"] ?> </td>
                    <td align="center"> <?php echo $data["jumlah_total"] ?> </td>
                    <td align="center"> <?php echo $data["lead_time"] ?> </td>
                    <td align="center"> <?php echo $data["pakai"] ?> </td>
                    <td>
                        <div class="btn-group">
                            <a href="pakai_barang.php?id=<?php echo $data['id_pesanan'] ?>" title="Pakai Barang" class="btn btn-sm btn-outline-info">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </a>
                        </div>
                    </td>
                   
                    
                </tr>
                    <?php
                    }
                ?>   
            </tbody> 
            <tfoot>
                <tr>
                    <th>NO.</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Pesan Barang</th>                        
                    <th>Satuan</th>
                    <th>Jumlah Total</th>
                    <th>Waktu Tunggu</th>
                    <th>Pemakaian Barang</th>
                    <th>Pakai Barang</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
    </div>

  <!-- ########## KONTENNYA TULIS SAMPAI SEBELUM SINI ################## -->
  </div>
</section>
<?php
  include "../page_layout/footer.php";
?>