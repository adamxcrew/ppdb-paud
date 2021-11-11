<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Wali</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Wali</li>
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
                        <?php if($this->session->userdata('level')=='Admin' || ($this->session->userdata('level')!='Admin' && count($ortu)==0 )): ?>
                        <a href="<?=base_url('wali/create');?>" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20">NO</th>
                                    <th>NIK WALI</th>
                                    <th>NAMA WALI</th>
                                    <th>TELP WALI</th>
                                    <th width="100">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; foreach($ortu as $row): ?>
                                <tr>
                                    <td><?= $n++; ?></td>
                                    <td><?= $row['wali_nik']; ?></td>
                                    <td><?= $row['wali_nama']; ?></td>
                                    <td><?= $row['wali_hp']; ?></td>
                                    <td align="center">
                                        <a href="<?=base_url('wali/detail/'.$row['idwali']);?>"
                                            class="btn btn-primary btn-xs" title="Lihat Detail"><i
                                                class="fas fa-eye"></i></a>
                                        <a href="<?=base_url('wali/update/'.$row['idwali']);?>"
                                            class="btn btn-info btn-xs" title="Ubah Data"><i
                                                class="fas fa-edit"></i></a>
                                        <?php if($this->session->userdata('level')=='Admin'): ?>
                                        <a href="<?=base_url('wali/delete/'.$row['idwali']);?>"
                                            class="btn btn-danger btn-xs btn-hapus" title="Hapus Data"><i
                                                class="fas fa-trash"></i></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
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
    <!-- /.contain
er-fluid -->
</section>

<!-- /.content -->