<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NHK Bắc Ninh - Thêm thông tin chuyển khẩu mới</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('res/') ?>assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url('res/') ?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url('res/') ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include 'includes/sidebar-menu.php'; ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include 'includes/header-area.php' ?>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Thêm thông tin chuyển khẩu</b></u></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url('res/') ?>assets/images/author/avatar.png" alt="avatar">
                            <a href="<?php echo base_url('auth/logout') ?>"><h4 class="user-name"><?php echo $_SESSION['hvt']; ?> <i class="fa fa-sign-out"></i></h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                	<div class="col-12 mt-5">
                		<div class="card">
                			<div class="card-body">
                                <div class="alert alert-warning" role="alert"><strong>LƯU Ý! </strong>Nếu chuyển khẩu chủ hộ, sau đó vui lòng chọn chủ hộ mới cho hộ khẩu cũ!</div>
                                <div class="noti">
                                    <?php if (isset($_SESSION['error'])) {
                                        echo '<div class="alert alert-warning" role="alert">'.$_SESSION['error'].'</div>';
                                    }
                                    ?>
                                </div>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="socmnd" class="col-form-label">Đối tượng</label>
                                                <select name="socmnd[]" id="socmnd" class="form-control" multiple="" required="">
                                                    <?php foreach ($nhankhau as $col => $row) { ?>
                                                    <option value="<?php echo $row['socmnd'] ?>"><?php echo $row['socmnd'].' - '.$row['hvt'].' - '.$row['mahk'].' - '.$row['qhvchuho']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="khaumoi" class="col-form-label">Khẩu mới</label>
                                                <select name="khaumoi" id="khaumoi" class="form-control" required="">
                                                    <?php foreach ($hokhau as $col => $row) { ?>
                                                    <option value="<?php echo $row['mahk'] ?>"><?php echo $row['mahk'].' - '.$row['tench'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="qhvchuho" class="col-form-label">Quan hệ với chủ hộ mới</label>
                                                <input type="text" name="qhvchuho" id="qhvchuho" class="form-control" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="chuhomoi" class="col-form-label">Chọn chủ hộ mới (Khi chủ hộ chuyển khẩu)</label>
                                                <select name="chuhomoi" id="chuhomoi" class="form-control">
                                                    <?php foreach ($nhankhau as $col => $row) { ?>
                                                        <option value="<?php echo $row['socmnd'] ?>"><?php echo $row['socmnd'].' - '.$row['hvt'].' - '.$row['mahk'].' - '.$row['qhvchuho'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="lydo" class="col-form-label">Lý do</label>
                                                <textarea name="lydo" id="lydo" class="form-control" rows="3" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-rounded btn-info" name="add" value="submit" type="submit">Xác nhận thêm</button>
                                </form>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <?php include 'res/includes/footer.php' ?>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="<?php echo base_url('res/') ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url('res/') ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url('res/') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('res/') ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('res/') ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url('res/') ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url('res/') ?>assets/js/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url('res/') ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url('res/') ?>assets/js/scripts.js"></script>
</body>

</html>
