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
                        <li class="breadcrumb-item active">Ubah Data Pembelian Obat</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?= $this->session->flashdata('message');
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>No Pembelian</td>
                            <td>Tanggal</td>
                            <td>Total</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pembelian as $us) : ?>
                        <tr>
                            <td> <?= $i; ?>.</td>
                            <td><?= $us['no_penjualan']; ?></td>
                            <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
                            <td><?= $us['status']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
            </div>
            <form action="" method="POST">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>No Pembelian</td>
                                <td>Obat</td>
                                <td>Jumlah</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($detailbeli as $us) : ?>
                            <tr>
                                <td> <?= $i; ?>.</td>
                                <td><?= $us['no_penjualan']; ?></td>
                                <td><?= $us['nama_obat']; ?></td>
                                <td><?= $us['jumlah']; ?></td>
                                <td><?= $us['total']; ?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?>">
                    <table class="table">
                        <tr>
                            <td>Apakah Pesanan Sudah Anda Terima ?</td>
                            <td>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="Diterima">Sudah</option>
                                    <option value="Gagal">Belum</option>
                                </select>
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                            </td>
                            <td>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah
                                    Status</button>

                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>