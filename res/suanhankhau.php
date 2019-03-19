<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NHK Bắc Ninh - Sửa thông tin nhân khẩu</title>
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
                            <h4 class="page-title pull-left">Sửa thông tin nhân khẩu: <br><b><?php echo $socmnd; ?></b></h4>
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
                                <div class="noti">
                                    <p style="color: red;">
                                        <?php if (isset($_SESSION['error'])) {
                                            echo $_SESSION['error'];
                                        }
                                        ?>
                                    </p>
                                </div>
                                <?php if ($data_nhankhau != NULL) { $i = 0;
                                    foreach ($data_nhankhau as $key => $value) { $i++;
                                ?>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="socmnd" class="col-form-label">Số CMND</label>
                                                 <input class="form-control" required="" type="text" name="socmnd" value="<?php echo $value['socmnd']; ?>" id="socmnd" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="hvt" class="col-form-label">Họ và tên</label>
                                                 <input class="form-control" required="" type="text" name="hvt" value="<?php echo $value['hvt']; ?>" id="hvt">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="tenkhac" class="col-form-label">Tên khác (Có thể trống)</label>
                                                 <input class="form-control" type="text" name="tenkhac" value="<?php echo $value['tenkhac']; ?>" id="tenkhac">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="gt" class="col-form-label">Giới tính</label>
                                                <?php 
                                            if ($value['gt'] == 0) {
                                             echo '<div class="radio">
                                             <label>
                                             <input type="radio" name="gt" id="gt" value="1">
                                             Nam
                                             </label>
                                             </div>
                                             <div class="radio">
                                             <label>
                                             <input type="radio" name="gt" id="gt" value="0" checked="checked">
                                             Nữ
                                             </label>
                                             </div>';
                                            } else {
                                            echo '<div class="radio">
                                            <label>
                                            <input type="radio" name="gt" id="gt" value="1" checked="checked">
                                            Nam
                                            </label>
                                            </div>
                                            <div class="radio">
                                            <label>
                                            <input type="radio" name="gt" id="gt" value="0">
                                            Nữ
                                            </label>
                                            </div>';
                                            }
                                            
                                             ?>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="ns" class="col-form-label">Ngày sinh</label>
                                                 <input class="form-control" required="" type="text" name="ns" value="<?php echo $value['ns']; ?>" id="ns">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="dt" class="col-form-label">Dân tộc</label>
                                                 <input class="form-control" required="" type="text" name="dt" value="<?php echo $value['dt']; ?>" id="dt">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="tg" class="col-form-label">Tôn giáo</label>
                                                 <input class="form-control" required="" type="text" name="tg" value="<?php echo $value['tg']; ?>" id="tg">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="dc" class="col-form-label">Địa chỉ thường trú</label>
                                                 <input class="form-control" required="" type="text" name="dc" value="<?php echo $value['dc']; ?>" id="dc" autocomplete="off">
                                                <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;cursor: pointer;height: 250px;overflow-y: scroll;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="trinhdonn" class="col-form-label">Trình độ ngoại ngữ</label>
                                                 <input class="form-control" required="" type="text" name="trinhdonn" value="<?php echo $value['trinhdonn']; ?>" id="trinhdonn">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="noilamviec" class="col-form-label">Nơi làm việc</label>
                                                 <input class="form-control" required="" type="text" name="noilamviec" value="<?php echo $value['noilamviec']; ?>" id="noilamviec" autocomplete="off">
                                                <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;cursor: pointer;height: 250px;overflow-y: scroll;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="choohiennay" class="col-form-label">Chỗ ở hiện nay</label>
                                                 <input class="form-control" required="" type="text" name="choohiennay" value="<?php echo $value['choohiennay']; ?>" id="choohiennay" autocomplete="off">
                                                <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;cursor: pointer;height: 250px;overflow-y: scroll;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="quequan" class="col-form-label">Quê quán</label>
                                                 <input class="form-control" required="" type="text" name="quequan" value="<?php echo $value['quequan']; ?>" id="quequan" autocomplete="off">
                                                <ul class="dropdown-menu txtQuequan" style="margin-left:15px;margin-right:0px;cursor: pointer;height: 250px;overflow-y: scroll;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownQuequan"></ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="tdhocvan" class="col-form-label">Trình độ học vấn</label>
                                                 <input class="form-control" required="" type="text" name="tdhocvan" value="<?php echo $value['tdhocvan']; ?>" id="tdhocvan">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="nghenghiep" class="col-form-label">Nghề nghiệp</label>
                                                 <input class="form-control" required="" type="text" name="nghenghiep" value="<?php echo $value['nghenghiep']; ?>" id="nghenghiep">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="mahk" class="col-form-label">Trong hộ khẩu</label>
                                                <p style="color: red;">(Thay đổi hộ khẩu vui lòng chọn <a href="<?php echo base_url('admin/tachkhau') ?>">tách khẩu</a>/<a href="<?php echo base_url('admin/chuyenkhau') ?>">chuyển khẩu</a>)</p>
                                                 <input class="form-control" required="" type="text" name="mahk" value="<?php echo $value['mahk']; ?>" id="mahk" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="qhvchuho" class="col-form-label">Quan hệ với chủ hộ</label>
                                                 <input class="form-control" required="" type="text" name="qhvchuho" value="<?php echo $value['qhvchuho']; ?>" id="qhvchuho">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="lydo" class="col-form-label">Lý do sửa</label>
                                                 <input class="form-control" required="" type="text" name="lydo" id="lydo">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <button class="btn btn-rounded btn-info" name="update" value="submit" type="submit">Xác nhận sửa</button>
                                </form>
                                <?php }} else{ echo "Không tìm thấy dữ liệu!"; } ?>
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
    <script src="<?php echo base_url('res/') ?>js/custom.js"></script>
</body>

</html>
