<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $judul; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Keranjang Obat</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 mb-6">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <img src="<?= base_url('assets/dist/img/obat/') . $obat['gambar']; ?>"
                                    style="width:400px" class="img-thumbnail">
                            </div>
                            <div class="col mr-2">
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $obat['id']; ?>">
                                        <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                        <input type="hidden" name="stok" value="<?= $obat['stok'] ?>">
                                        <div class="form-group">
                                            <label for="nama">Nama obat</label>
                                            <input name="nama" type="text" value="<?= $obat['nama']; ?>" readonly
                                                class="form-control" id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="stok">Stok</label>
                                            <input name="stok" value="<?= $obat['stok']; ?>" type="text" readonly
                                                class="form-control" id="pengarang">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input name="harga" value="<?= $obat['harga']; ?>" type="text" readonly
                                                class="form-control" id="harga">
                                        </div>
                                        <?php if ($obat['status'] != 'Obat Keras') { ?>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah</label>
                                            <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="total">Total Harga</label>
                                            <input type="text" name="total" id="total" readonly class="form-control">
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('Profil') ?>" class="btn btn-danger">Tutup</a>
                                            <button type="submit" id="tambah" name="tambah"
                                                class="btn btn-primary float-right">Tambah Ke
                                                Keranjang</button>
                                        </div>
                                        <?php } else { ?>
                                        <div>
                                            <h5>Khusus obat keras, pembelian membutuhkan resep dokter. Kunjungi toko dan
                                                berikan resep doktermu!</h5>
                                        </div>
                                        <div class="card-footer">
                                            <a href="<?= base_url('Profil') ?>" class="btn btn-danger">Tutup</a>
                                        </div>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>