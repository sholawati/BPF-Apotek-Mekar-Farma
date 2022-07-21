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
                               <li class="breadcrumb-item active">Edit Supplier</li>
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
                                   <h3 class="card-title">Form Edit Data Supplier</small></h3>
                               </div>
                               <!-- /.card-header -->
                               <!-- form start -->
                               <form action="" method="POST" enctype="multipart/form-data">
                                   <input type="hidden" name="id" value="<?= $supplier['id']; ?>">
                                   <div class="card-body">
                                       <div class="form-group">
                                           <label for="nama">Nama Supplier</label>
                                           <input type="text" name="nama" value="<?= $supplier['nama']; ?>"
                                               class="form-control" id="nama" placeholder="Nama Supplier">
                                           <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="Alamat">Alamat</label>
                                           <input type="text" name="alamat" value="<?= $supplier['alamat']; ?>"
                                               class="form-control" id="alamat" placeholder="Alamat">
                                           <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="kota">Kota</label>
                                           <input type="text" name="kota" value="<?= $supplier['kota']; ?>"
                                               class="form-control" id="kota" placeholder="Kota">
                                           <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="form-group">
                                           <label for="no_telp">Nomor Telepon</label>
                                           <input type="text" name="no_telp" value="<?= $supplier['no_telp']; ?>"
                                               class="form-control" id="no_telp" placeholder="Nomor Telepon">
                                           <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <!-- /.card-body -->
                                       <div class="card-footer">
                                           <a href="<?= base_url('Supplier') ?>" class="btn btn-danger">Tutup</a>
                                           <button type="submit" name="edit"
                                               class="btn btn-primary float-right">Update</button>
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