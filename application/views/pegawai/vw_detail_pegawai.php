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
                        <li class="breadcrumb-item active">Pegawai</li>
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
                            Detail Pegawai
                        </div>
                        <div class="card-body">
                            <h2 class="card-subtitle"><?= $pegawai['nama']; ?></h2>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $pegawai['email']; ?></h6>
                            <div class="row">
                                <div class="col-md-4">Jenis Kelamin</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6"><?= $pegawai['jenis_kelamin']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">No Hp</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6"><?= $pegawai['no_hp']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Alamat</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6"><?= $pegawai['alamat']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Jam Kerja</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6"><?= $pegawai['jam_kerja']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Hari Kerja</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6"><?= $pegawai['hari_kerja']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Gaji</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-6"><?= $pegawai['gaji']; ?></div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="<?= base_url('Pegawai') ?>" class="btn btn-danger">Tutup</a>
                        </div>
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