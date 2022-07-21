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
                               <li class="breadcrumb-item active">Tambah Pegawai</li>
                           </ol>
                       </div>
                   </div>
               </div><!-- /.container-fluid -->
           </section>
           <!-- Main content -->
           <section class="content">
               <div class="container-fluid">
                   <div class="row">
                       <!-- left column -->
                       <div class="col-md-12">
                           <!-- jquery validation -->
                           <div class="card card-primary">
                               <div class="card-header">
                                   <h3 class="card-title">Form Tambah Data Pegawai</small></h3>
                               </div>
                               <!-- /.card-header -->
                               <!-- form start -->
                               <form action="" method="POST" enctype="multipart/form-data">
                                   <div class="card-body">
                                       <div class="form-group">
                                           <label for="nama">Nama Pegawai</label>
                                           <input type="text" name="nama" class="form-control" id="nama"
                                               placeholder="Nama Pegawai">
                                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="email">Email</label>
                                           <input type="text" name="email" class="form-control" id="email"
                                               placeholder="Email">
                                           <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="jenis_kelamin">Jenis Kelamin</label>
                                           <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>"
                                               class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin">
                                               <option value="">Jenis Kelamin</option>
                                               <option value="Laki-laki">Laki-laki</option>
                                               <option value="Perempuan">Perempuan</option>
                                           </select>
                                           <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="no_hp">No Hp</label>
                                           <input type="text" name="no_hp" class="form-control" id="no_hp"
                                               placeholder="No Hp">
                                           <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="alamat">Alamat</label>
                                           <input type="text" name="alamat" class="form-control" id="alamat"
                                               placeholder="Alamat">
                                           <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="jam_kerja">Jam Kerja</label>
                                           <input type="text" name="jam_kerja" class="form-control" id="jam_kerja"
                                               placeholder="Jam Kerja">
                                           <?= form_error('jam_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="hari_kerja">Hari Kerja</label>
                                           <input type="text" name="hari_kerja" class="form-control" id="hari_kerja"
                                               placeholder="Hari Kerja">
                                           <?= form_error('hari_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="gaji">Gaji</label>
                                           <input type="text" name="gaji" class="form-control" id="gaji"
                                               placeholder="Gaji">
                                           <?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <!-- /.card-body -->
                                       <div class="card-footer">
                                           <a href="<?= base_url('Pegawai') ?>" class="btn btn-danger">Tutup</a>
                                           <button type="submit" name="tambah"
                                               class="btn btn-primary float-right">Tambah</button>
                                       </div>
                               </form>
                           </div>
                           <!-- /.card -->
                       </div>
                       <!--/.col (left) -->
                       <!-- right column -->
                       <div class="col-md-6">

                       </div>
                       <!--/.col (right) -->
                   </div>
                   <!-- /.row -->
               </div><!-- /.container-fluid -->
           </section>
           <!-- /.content -->
       </div>
       <!-- /.content-wrapper -->