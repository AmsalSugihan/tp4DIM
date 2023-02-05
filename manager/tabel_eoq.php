<?php
include "../class/config.php";
include "../class/barang.php";
//include "../class/produksi.php";
//include "../class/pemesanan.php";

	$d1 = new database();
	$d1->koneksidatabase();
	
	$EOQ = new barang();
	$EOQ->EOQ();
	$TabelEOQ = $EOQ->EOQ();

?>
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Data EOQ</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped list_datatable2">
            <thead>
                <tr>
                    <th> No. </th>                       
                    <th> Nama Barang </th>
                    <th> Harga Barang </th>
                    <th> Jumlah Pesanan </th>
                    <th> Biaya Penyimpanan </th>
                    <th> Permintaan per Periode </th>
                    <th> Biaya Tiap Pemesanan </th>                        
                    <th> EOQ </th>
                    <th> Pembelian Optimum </th>
                    <th> Daur Pembelian </th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach ($TabelEOQ as $key => $data) {
                ?>
                <tr>
                    <td> <?php echo $key+1 ?> </td>                       
                    <td> <?php echo $data['nama_barang'] ?> </td>
                    <td align="center"> <?php echo number_format(@$data['harga_barang'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['pesan'], 2) ?> </td>                        
                    <td align="center"> <?php echo number_format(@$data['H'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['R'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['C'], 2) ?> </td>                        
                    <td align="center"> <?php echo number_format(@$data['EOQ'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['pembelian_optimum'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['daur_pembelian'], 2) ?> </td>                     
                    
                </tr>
                    <?php
                    }
                ?>    
            </tbody>
            <tfoot>
                <tr>
                    <th> </th>                       
                    <th> Nama Barang </th>
                    <th> Harga Barang </th>
                    <th> Jumlah Pesanan </th>
                    <th> Biaya Penyimpanan </th>
                    <th> Permintaan per Periode </th>
                    <th> Biaya Tiap Pemesanan </th>                        
                    <th> EOQ </th>
                    <th> Pembelian Optimum </th>
                    <th> Daur Pembelian </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>