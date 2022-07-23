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
                               <li class="breadcrumb-item active">Tambah Obat</li>
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
                                   <h3 class="card-title">Form Tambah Data Obat</small></h3>
                               </div>
                               <!-- /.card-header -->
                               <!-- form start -->
                               <form action="" method="POST" enctype="multipart/form-data">
                                   <div class="card-body">
                                       <div class="form-group">
                                           <label for="nama">Nama Obat</label>
                                           <input type="text" name="nama" class="form-control" id="nama"
                                               placeholder="Nama Obat">
                                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="status">Jenis Obat</label>
                                           <select name="status" value="<?= set_value('status') ?>" class="form-control"
                                               id="status" placeholder="Jenis Obat">
                                               <option value="">Jenis Obat</option>
                                               <option value="Obat Biasa">Obat Biasa</option>
                                               <option value="Obat Keras">Obat Keras</option>
                                           </select>
                                           <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="stok">Stok</label>
                                           <input type="text" name="stok" class="form-control" id="stok"
                                               placeholder="Stok Obat">
                                           <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="harga">Harga</label>
                                           <input type="text" name="harga" class="form-control" id="harga"
                                               placeholder="Harga Obat">
                                           <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="supplier">Supplier</label>
                                           <select name="supplier" id="supplier" class="form-control">
                                               <option value="">Pilih Supplier</option>
                                               <?php foreach ($supplier as $p) : ?>
                                               <option value=" <?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                               <?php endforeach; ?>
                                           </select>

                                       </div>
                                       <div class="form-group">
                                           <label for="gambar">Gambar</label>
                                           <div class="custom-file">
                                               <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                               <label for="gambar" class="custom-file-label">Choose File</label>

                                           </div>
                                       </div>
                                   </div>
                                   <!-- /.card-body -->
                                   <div class="card-footer">
                                       <a href="<?= base_url('Obat') ?>" class="btn btn-danger">Tutup</a>
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
