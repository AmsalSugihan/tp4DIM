<!-- mulai form -->
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Form Input Barang</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form class="form-horizontal" method="post" action="barang_simpan.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_barang"> Nama Barang  </label>
                        <input type="text" class="form-control" id="nama_barang" placeholder="nama barang" name="nama_barang">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga_barang"> Harga Barang  </label>
                        <input type="text" class="form-control" id="harga_barang" placeholder="harga barang" name="harga_barang">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="biaya_penyimpanan"> Biaya Penyimpanan  </label>
                        <input type="text" class="form-control" id="biaya_penyimpanan" placeholder="biaya penyimpanan" name="biaya_penyimpanan">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="periode_permintaan"> Periode Permintaan  </label>
                        <input type="text" class="form-control" id="periode_permintaan" placeholder="periode permintaan" name="periode_permintaan">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="satuan"> Satuan  </label>
                        <input type="text" class="form-control" id="satuan" placeholder="Satuan Barang" name="satuan">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="satuan"> Konversi  </label>
                        <input type="text" class="form-control" id="konversi" placeholder="Konversi Satuan Barang" name="konversi">
                    </div>
                </div>
            </div>
               
            <div class="form-group">
                <div class="col-md-7 col-md-offset-2">
                    
                        <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        <a class="btn btn-danger" href="index.php" role="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
    
    <!-- akhir form -->
