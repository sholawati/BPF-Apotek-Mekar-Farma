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
                        <li class="breadcrumb-item active">Obat</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <?= $this->session->flashdata('message');
                ?>
            </div>
            <?php $i = 1; ?>
            <?php foreach ($obat as $us) : ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div><?= $us['nama'] ?></div>
                                <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
                                <div>Stok <a class="badge badge-info"><?= $us['stok'] ?></a></div>
                            </div>
                            <div class="col-auto">
                                <img src="<?= base_url('assets/dist/img/obat/') . $us['gambar']; ?>" style="width:100px"
                                    class="img-thumbnail">
                            </div>
                        </div>
                        <div class="align-items-center">
                            <a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>"
                                class="badge badge-warning badge-block">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>