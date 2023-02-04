<!-- Mulai Tabel -->

<!-- <div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Pengambilan </th>
                        <th> Nama Barang </th>
                        <th> Jumlah Pengambilan </th>
                        
                        
                    </tr>
                    <tr>
                    <?php
                        foreach ($DaftarPengambilan as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_pengambil"] ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>
                        <td> <?php echo $data["jumlah_pengambilan"] ?> </td>
                                                
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div>
</div> -->


<div class="card-body">
        <table class="table table-bordered table-striped list_datatable">
            <thead>        
                <tr>
                    <th> </th>
                    <th> Nama Pengambilan </th>
                    <th> Nama Barang </th>
                    <th> Jumlah Pengambilan </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php
                    foreach ($DaftarPengambilan as $key => $data) {
                ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_pengambil"] ?> </td>
                        <td> <?php echo $data["nama_barang"] ?> </td>
                        <td> <?php echo $data["jumlah_pengambilan"] ?> </td>
                </tr>
                    <?php
                    }
                ?>   
            </tbody> 
            <tfoot>
                <tr>
                    <th> </th>
                    <th> Nama Pengambilan </th>
                    <th> Nama Barang </th>
                    <th> Jumlah Pengambilan </th>
                </tr>
            </tfoot>
        </table>
    </div>