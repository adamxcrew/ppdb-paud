<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pembayaran</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pembayaran</li>
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
                    <?php 
					$hidden = [
						'idsiswa' => isset($edit)?$row['idsiswa']:''
					];
					echo form_open('biodata/add_bayar', ['method'=>'post','enctype'=>'multipart/form-data'], $hidden);
					?>
                    <div class="card-header">
                        <h3 class="card-title">Form Pembayaran</h3>
                        <?php 
							$data = array(
								'class'			=> 'btn btn-primary btn-sm float-right',
								'type'          => 'submit',
								'content'       => '<i class="fas fa-plus"></i> Tambah Pembayaran'
							);
							echo form_button($data);
						?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php if($this->session->userdata('level')=='Admin'): ?>
                                    <div class="col-md-12 mb-3">
                                        <span class="text-danger">Jika pembayaran dilakukan secara tunai Anda hanya
                                            perlu memilih siswa dan mengisi keterangan, tidak perlu mengupload file
                                            bukti cukup anda <b>centang</b> pada tulisan <b>Pembayaran dilakukan secara
                                                Tunai</b> dibawah ini.</span>
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-12">
                                        <?php if($this->session->userdata('level')=='Admin'): ?>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="bayar_tunai"
                                                name="bayar_tunai">
                                            <label class="form-check-label" for="bayar_tunai">Pembayaran dilakukan
                                                secara Tunai</label>
                                        </div>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <?php
												echo form_label('Siswa', 'siswa_id');
												
												$attr = [
													'id'=>'siswa_id',
													'required'=>'required',
													'class'=>'form-control select2'
												];
												echo form_dropdown('siswa_id', $siswa, isset($edit)?$row['siswa_id']:'',$attr);
												?>
                                        </div>


                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <?php
										echo form_label('Keterangan', 'keterangan');
										$attr = [
											'id'=>'keterangan',
											'class'=>'form-control',
											'required'=>'required',
											'placeholder'=>'Ketikkan keterangan File Bukti'
										];
										echo form_input('keterangan', '', $attr);
										?>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <?= form_label('File Bukti', 'file_bukti');?>
                                        <?php
										$attr = [
											'id'=>'file_bukti',
											'class'=>'form-control'
										];
										echo form_upload('file_bukti', '', $attr);
										?>
                                        <span class="muted">File format .jpg .jpeg .png .bmp dan berukuran maksimal 2
                                            MB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <?= form_close(); ?>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Pembayaran Siswa</h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="20">NO</th>
                                    <?php if($this->session->userdata('level')=='Admin'): ?>
                                    <th width="110">FILE DOKUMEN</th>
                                    <?php endif; ?>
                                    <th>NAMA SISWA</th>
                                    <th>KETERANGAN</th>
                                    <th>STATUS</th>
                                    <?php if($this->session->userdata('level')=='Admin'): ?>
                                    <th width="80">AKSI</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n=1; foreach($all_bayar as $row): ?>
                                <tr>
                                    <td><?= $n++; ?></td>
                                    <?php if($this->session->userdata('level')=='Admin'): ?>
                                    <td>
                                        <?php if($row['file_bukti']!=null): ?>
                                        <a href="<?=base_url('uploads/'.$row['file_bukti']);?>" target="_blank">
                                            <img src="<?=base_url('uploads/'.$row['file_bukti']);?>" alt="File Bukti"
                                                width="100" height="100">
                                        </a>
                                        <?php else: ?>
                                        <span class="badge badge-success">Bayar Tunai</span>
                                        <?php endif; ?>
                                    </td>
                                    <?php endif; ?>
                                    <td><?= $row['nama_lengkap']; ?></td>
                                    <td><?= $row['keterangan']; ?></td>
                                    <td>
                                        <?php if($row['status']=='Sudah Bayar'): ?>
                                        <span class="badge badge-success"><?= $row['status']; ?></span>
                                        <?php else: ?>
                                        <span class="badge badge-danger"><?= $row['status']; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <?php if($this->session->userdata('level')=='Admin'): ?>
                                    <td align="center">
                                        <a href="<?=base_url('biodata/del_bayar/'.$row['idpembayaran']);?>"
                                            class="btn btn-danger btn-sm btn-hapus"><i class="fas fa-trash"></i>
                                            Hapus</a>
                                    </td>
                                    <?php endif; ?>
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
    <!-- /.container-fluid -->
</section>





<!-- /.content -->