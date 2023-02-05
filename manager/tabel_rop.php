<?php
include "../class/config.php";
include "../class/barang.php";
//include "../class/produksi.php";
//include "../class/pemesanan.php";

	$d1 = new database();
	$d1->koneksidatabase();
	
	$ROP = new barang();
	$ROP->ROP();
	$TabelROP = $ROP->ROP();

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
                    <th> Jumlah Pesanan </th>
                    <th> Satuan </th>
                    <th> Konversi </th>
                    <th> Jumlah Total </th>
                    <th> Perkiraan Pemakaian </th>
                    <th> Pemakaian Sebenarnya </th>
                    <th> Waktu Tunggu (Lead Time) </th>                        
                    <th> Safety Stock </th>
                    <th> ROP (ReOrder Point)</th>         
                </tr>
            </thead>
            <tbody> 
                <?php
                
                    foreach ($TabelROP as $key => $data) {
                ?>
                <tr>
                    <td> <?php echo $key+1 ?> </td>
                    <td> <?php echo $data['nama_barang'] ?> </td>                       
                    <td align="center"> <?php echo number_format(@$data['pesanan_total'], 2) ?> </td>
                    <td align="center"> <?php echo @$data['satuan'] ?> </td>
                    <td align="center"> <?php echo number_format(@$data['konversi'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['total_barang'], 2) ?> </td>                        
                    <td align="center"> <?php echo number_format(@$data['X'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['Y'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['lead_time'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['safety_stock'], 2) ?> </td>
                    <td align="center"> <?php echo number_format(@$data['ROP'], 2) ?> </td>
                </tr>
                    <?php
                    }
                ?> 
            </tbody>
            <tfoot>
                <tr>
                    <th> No. </th>                        
                    <th> Nama Barang </th>                        
                    <th> Jumlah Pesanan </th>
                    <th> Satuan </th>
                    <th> Konversi </th>
                    <th> Jumlah Total </th>
                    <th> Perkiraan Pemakaian </th>
                    <th> Pemakaian Sebenarnya </th>
                    <th> Waktu Tunggu (Lead Time) </th>                        
                    <th> Safety Stock </th>
                    <th> ROP (ReOrder Point)</th>         
                </tr>
            </tfoot>   
        </table>
    </div>
    <!-- /.card-body -->
</div>
