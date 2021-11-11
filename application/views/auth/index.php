<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?=base_url('assets/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/');?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page"
    style="background-image:url('<?=base_url('assets/image/bg.jpeg');?>');background-size:cover;">
    <?php if($this->session->flashdata('success')):?>
    <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
    <?php endif;?>
    <?php if($this->session->flashdata('error')):?>
    <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
    <?php endif;?>
    <div class="mb-3">
        <img src="<?=base_url('uploads/'._profil()->logo);?>" alt="Logo" width="100" height="100">
    </div>
    <?php $this->load->view($content); ?>

    <!-- jQuery -->
    <script src="<?=base_url('assets/');?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?=base_url('assets/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/');?>plugins/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="<?=base_url('assets/');?>plugins/sweet-alert.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets/');?>dist/js/adminlte.min.js"></script>
</body>

</html>