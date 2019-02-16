<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('res/') ?>assets/images/icon/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active"><a href="<?php echo base_url('admin'); ?>"><i class="ti-dashboard"></i> <span>dashboard</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Quản lý hộ khẩu</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url('admin/hokhau'); ?>">Tất cả hộ khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/themhokhau'); ?>">Thêm hộ khẩu mới</a></li>
                            <li><a href="<?php echo base_url('admin/thongkehokhau'); ?>">Thống kê hộ khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/nhatkyhokhau'); ?>">Nhật ký hộ khẩu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-id-badge"></i><span>Quản lý nhân khẩu</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url('admin/nhankhau'); ?>">Tất cả nhân khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/themnhankhau'); ?>">Thêm nhân khẩu mới</a></li>
                            <li><a href="<?php echo base_url('admin/thongkenhankhau'); ?>">Thống kê nhân khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/nhatkynhankhau'); ?>">Nhật ký nhân khẩu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-time"></i><span>Quản lý tạm trú</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url('admin/tamtru'); ?>">Danh sách tạm trú</a></li>
                            <li><a href="<?php echo base_url('admin/themtamtru'); ?>">Thêm tạm trú mới</a></li>
                            <li><a href="<?php echo base_url('admin/thongketamtru'); ?>">Thống kê tạm trú</a></li>
                            <li><a href="<?php echo base_url('admin/nhatkytamtru'); ?>">Nhật ký tạm trú</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-share"></i><span>Quản lý tạm vắng</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url('admin/tamvang'); ?>">Danh sách tạm vắng</a></li>
                            <li><a href="<?php echo base_url('admin/themtamvang'); ?>">Thêm tạm vắng mới</a></li>
                            <li><a href="<?php echo base_url('admin/thongketamvang'); ?>">Thống kê tạm vắng</a></li>
                            <li><a href="<?php echo base_url('admin/nhatkytamvang'); ?>">Nhật ký tạm vắng</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-media-overlay"></i><span>Quản lý chuyển khẩu</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url('admin/chuyenkhau'); ?>">Danh sách chuyển khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/themchuyenkhau'); ?>">Thêm chuyển khẩu mới</a></li>
                            <li><a href="<?php echo base_url('admin/thongkechuyenkhau'); ?>">Thống kê chuyển khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/nhatkychuyenkhau'); ?>">Nhật ký chuyển khẩu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-support"></i><span>Quản lý tách khẩu</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url('admin/tachkhau'); ?>">Danh sách tách khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/themtachkhau'); ?>">Thêm tách khẩu mới</a></li>
                            <li><a href="<?php echo base_url('admin/thongketachkhau'); ?>">Thống kê tách khẩu</a></li>
                            <li><a href="<?php echo base_url('admin/nhatkytachkhau'); ?>">Nhật ký tách khẩu</a></li>
                        </ul>
                    </li>
                    <li><a href="quanlynhanvien"><i class="ti-user"></i> <span>Quản lý nhân viên</span></a></li>
                    <li><a href="thongtincanhan"><i class="ti-info-alt"></i> <span>Thông tin cá nhân</span></a></li>
                    <li><a onclick="return confirm('Bạn có chắc chắn muốn đăng xuất?')" href="<?php echo base_url('auth/logout'); ?>"><i class="ti-power-off"></i> <span>Đăng xuất hệ thống</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>