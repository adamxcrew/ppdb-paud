<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= isset($edit)?'Edit':'Tambah'; ?> Data Wali</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><?= isset($edit)?'Edit':'Tambah'; ?> Data Wali</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><?= isset($edit)?'Form Edit':'Form Tambah'; ?> Data Wali</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php 
					$hidden = [
						'idwali' => isset($edit)?$row['idwali']:''];
					echo form_open('wali/save', ['method'=>'post'], $hidden);
					?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Nama Wali', 'wali_nama');
										$attr = [
											'id'=>'wali_nama',
											'class'=>'form-control',
											'required'=>'required',
											'placeholder'=>'Nama lengkap Wali'
										];
										echo form_input('wali_nama', isset($edit)?$row['wali_nama']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('NIK Wali', 'wali_nik');
										$attr = [
											'id'=>'wali_nik',
											'class'=>'form-control nik',
											'required'=>'required',
											'placeholder'=>'NIK Wali'
										];
										echo form_input('wali_nik', isset($edit)?$row['wali_nik']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Tempat Lahir Wali', 'wali_tmp_lahir');
										$attr = [
											'id'=>'wali_tmp_lahir',
											'class'=>'form-control',
											'required'=>'required',
											'placeholder'=>'Tempat Lahir Wali'
										];
										echo form_input('wali_tmp_lahir', isset($edit)?$row['wali_tmp_lahir']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Tanggal Lahir Wali', 'wali_tgl_lahir');
										$attr = [
											'id'=>'wali_tgl_lahir',
											'type'=>'date',
											'name'=>'wali_tgl_lahir',
											'required'=>'required',
											'value'=>isset($edit)?$row['wali_tgl_lahir']:'',
											'class'=>'form-control'
										];
										echo form_input($attr,'');
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Kewarganegaraan Wali', 'wali_negara');
										$attr = [
											'id'=>'wali_negara',
											'class'=>'form-control',
											'required'=>'required',
											'placeholder'=>'Kewarganegaraan Wali'
										];
										echo form_input('wali_negara', isset($edit)?$row['wali_negara']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Agama Wali', 'wali_agama');
										$options = [
											''=>'Pilih Agama',
											'Islam'=>'Islam',
											'Kristen Protestan'=>'Kristen Protestan',
											'Kristen Katolik'=>'Kristen Katolik',
											'Hindu'=>'Hindu',
											'Budha'=>'Budha',
											'Konghucu'=>'Konghucu'
										];
										$attr = [
											'id'=>'wali_agama',
											'required'=>'required',
											'class'=>'form-control'
										];
										echo form_dropdown('wali_agama', $options, isset($edit)?$row['wali_agama']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('No. HP Wali', 'wali_hp');
										$attr = [
											'id'=>'wali_hp',
											'class'=>'form-control angka',
											'required'=>'required',
											'placeholder'=>'No. HP Wali'
										];
										echo form_input('wali_hp', isset($edit)?$row['wali_hp']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Pendidikan Terakhir Wali', 'wali_pend_terakhir');
										$options = [
											''=>'Pilih Pendidikan Terakhir',
											'Tidak Sekolah'=>'Tidak Sekolah',
											'SD Sederajat'=>'SD Sederajat',
											'SMP Sederajat'=>'SMP Sederajat',
											'SMA Sederajat'=>'SMA Sederajat',
											'D1'=>'D1',
											'D2'=>'D2',
											'D3'=>'D3',
											'D4'=>'D4',
											'S1'=>'S1',
											'S2'=>'S2',
											'Doktor'=>'Doktor'
										];
										$attr = [
											'id'=>'wali_pend_terakhir',
											'required'=>'required',
											'class'=>'form-control'
										];
										echo form_dropdown('wali_pend_terakhir', $options, isset($edit)?$row['wali_pend_terakhir']:'',$attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Pekerjaan Wali', 'wali_pekerjaan');
										$attr = [
											'id'=>'wali_pekerjaan',
											'class'=>'form-control',
											'required'=>'required',
											'placeholder'=>'Pekerjaan Wali'
										];
										echo form_input('wali_pekerjaan', isset($edit)?$row['wali_pekerjaan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Penghasilan Wali', 'wali_penghasilan');
										$attr = [
											'id'=>'wali_penghasilan',
											'class'=>'form-control uang',
											'required'=>'required',
											'placeholder'=>'Penghasilan Wali'
										];
										echo form_input('wali_penghasilan', isset($edit)?$row['wali_penghasilan']:'', $attr);
										?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <?php
										echo form_label('Nama Ibu Kandung', 'wali_nama_ibu');
										$attr = [
											'id'=>'wali_nama_ibu',
											'class'=>'form-control',
											'required'=>'required',
											'placeholder'=>'Nama Ibu Kandung Wali'
										];
										echo form_input('wali_nama_ibu', isset($edit)?$row['wali_nama_ibu']:'', $attr);
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="<?=base_url('menu/wali_anak');?>" class="btn btn-secondary float-left"><i
                                class="fas fa-chevron-left"></i> Kembali</a>
                        <?php 
							$data = array(
								'class'			=> 'btn btn-primary float-right',
								'type'          => 'submit',
								'content'       => '<i class="fas fa-save"></i> Simpan'
							);
							echo form_button($data);
						?>
                    </div>
                    <?= form_close(); ?>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>