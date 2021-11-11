<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Wali "<?= $row['wali_nama']; ?>"</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Detail Wali</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?=base_url('menu/wali_anak');?>" class="btn btn-sm btn-primary"><i
                                class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4 text-right">Nama Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_nama']; ?></dd>
                            <dt class="col-sm-4 text-right">NIK Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_nik']; ?></dd>
                            <dt class="col-sm-4 text-right">TTL Wali</dt>
                            <dd class="col-sm-8">:
                                <?= $row['wali_tmp_lahir'].', '.date('d-m-Y',strtotime($row['wali_tgl_lahir'])); ?></dd>
                            <dt class="col-sm-4 text-right">Kewarganegaraan Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_negara']; ?></dd>
                            <dt class="col-sm-4 text-right">Agama Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_agama']; ?></dd>
                            <dt class="col-sm-4 text-right">Telp Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_hp']; ?></dd>
                            <dt class="col-sm-4 text-right">Pend. Terakhir Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_pend_terakhir']; ?></dd>
                            <dt class="col-sm-4 text-right">Pekerjaan Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_pekerjaan']; ?></dd>
                            <dt class="col-sm-4 text-right">Penghasilan Wali</dt>
                            <dd class="col-sm-8">: <?= 'Rp.'.$row['wali_penghasilan']; ?></dd>
                            <dt class="col-sm-4 text-right">Ibu Kandung Wali</dt>
                            <dd class="col-sm-8">: <?= $row['wali_nama_ibu']; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>