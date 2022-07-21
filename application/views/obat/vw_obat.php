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
                        <li class="breadcrumb-item active">Obat</li>
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
                            <h3 class="card-title">Obat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <a href="<?= base_url() ?>Obat/tambah"><button type="submit" class="btn btn-primary"><i
                                        class="fa fa-plus"></i> Tambah</button></a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Obat</td>
                                        <td>Jenis Obat</td>
                                        <td>Stok</td>
                                        <td>Harga</td>
                                        <td>Supplier</td>
                                        <td>Gambar</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($obat as $us) : ?>
                                    <tr>
                                        <td> <?= $i; ?>.</td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['status']; ?></td>
                                        <td><?= $us['stok']; ?></td>
                                        <td><?= $us['harga']; ?></td>
                                        <td><?= $us['supplier']; ?></td>
                                        <td><img src="<?= base_url('assets/dist/img/obat/') . $us['gambar']; ?>"
                                                style="width: 100px;" class="img-thumbnail"></td>
                                        <td>
                                            <a href="<?= base_url('Obat/hapus/') . $us['id']; ?>"><button type="submit"
                                                    class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                <a href="<?= base_url('Obat/edit/') . $us['id']; ?>"><button
                                                        type="submit" class="btn btn-outline-warning"><i
                                                            class="fa fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>