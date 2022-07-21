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
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item active">Pembelian</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pembelian</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>No Pembelian</td>
                                        <td>Tanggal</td>
                                        <td>Total</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
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
                                        <td>
                                            <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>"><button
                                                    type="submit" class="btn btn-outline-warning"><i
                                                        class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>