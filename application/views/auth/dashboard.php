<!-- Begin Page Content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1><?php echo $judul; ?></h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Jumlah Obat</h3>

                        <p>
                        <h4><?= $obat ?></h4>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tablets"></i>
                    </div>
                    <a href="<?= site_url('Obat/') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Jumlah Penjualan</h3>

                        <p>
                        <h4><?= $penjualan ?></h4>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart "></i>
                    </div>
                    <a href="<?= site_url('Penjualan/') ?>" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>Jumlah User</h3>

                        <p>
                        <h4><?= $us ?></h4>
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="card shadow col-md-20 mb-10">
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>