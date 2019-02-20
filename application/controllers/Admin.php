<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));	
		$this->load->library("session");
		if ($this->session->has_userdata('manv') == false) {
			redirect(base_url('auth/login'));
		}
		$this->load->model('M_Admin');
		$this->load->view('V_Admin');
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		
	}
	public function index()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data = $model->get_number_dash();
		$view->index($data);
	}
	public function hokhau()
	{

		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('delete') == 'submit') {
			$delete_data['mahk'] = $this->input->post('mahk');
			$delete_data['lydo'] = $this->input->post('lydo');
			$delete_data['type'] = 'Xóa';
			$delete_data['date'] = date("Y-m-d H:i:s");
			$mot_hokhau = $model->mot_hokhau($delete_data['mahk']);
			foreach ($mot_hokhau as $key => $value){
				$delete_data['tench'] = $value['tench'];
				$delete_data['dc'] = $value['dc'];
			}
			$nhankhau = $model->get_nhankhau($delete_data['mahk']);
			foreach ($nhankhau as $key => $value){
				$model->delete_nhankhau($value['socmnd']);
			}
			$model->delete_hokhau($delete_data['mahk']);
			$model->insert_log_hokhau($delete_data);
            $this->session->set_flashdata('error', '- Xóa hộ khẩu thành công!');
		}
		$data_table = $model->hokhau();
		$view->hokhau($data_table);
	}
	public function suahokhau($mahk)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('edit') == 'submit') {
			$mahk = $this->input->post('mahk');
			$socmnd = $this->input->post('socmnd');
			$tench = $this->input->post('tench');
			$dc = $this->input->post('dc');
			$check = $model->check_cmnd($socmnd, $tench);
			if ($check == 1) {
				$model->update_chuhocu($mahk);
				$model->update_chuhomoi($mahk, $socmnd, $tench, $dc);
				$model->update_nhankhau($mahk, $socmnd, $tench, $dc);
                $this->session->set_flashdata('error', '- Thanh đổi hộ khẩu thành công!');
			}
			else{
                $this->session->set_flashdata('error', '- Số cmnd và tên chủ hộ không hợp lệ!');
			}
		}
		$data = $model->show_once_hk($mahk);
		$view->suahokhau($data, $mahk);
	}
	public function themhokhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('add') == 'submit') {
			$mahk = $this->input->post('mahk');
			$socmnd = $this->input->post('socmnd');
			$tench = $this->input->post('tench');
			$dc = $this->input->post('dc');
			if ($mahk == NULL || $socmnd == NULL || $tench == NULL || $dc == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng nhập đầy đủ thông tin!');
			} else {
				$check_mahk = $model->check_mahk($mahk);
				if ($check_mahk == 1) {
					$this->session->set_flashdata('error', '- Mã hộ khẩu vừa nhập đã bị trùng!');
				} else {
					$check = $model->check_cmnd($socmnd, $tench);
					if ($check == 1) {
						$model->them_ho_khau($mahk, $socmnd, $tench, $dc);
						$model->thay_chu_ho($mahk, $socmnd, $tench);
						$this->session->set_flashdata('error', '- Thêm hộ khẩu mới thành công!');
					}
					else{
						$this->session->set_flashdata('error', '- Số cmnd và tên chủ hộ không hợp lệ!');
					}
				}
			}
		}
		$view->themhokhau();
	}
	public function xemhokhau($mahk)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data_table = $model->xemhokhau($mahk);
		$view->xemhokhau($mahk, $data_table);
	}
	public function nhankhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('delete') == 'submit') {
			$delete_data['socmnd'] = $this->input->post('socmnd');
			$delete_data['lydo'] = $this->input->post('lydo');
			$delete_data['type'] = 'Xóa';
			$delete_data['date'] = date("Y-m-d H:i:s");
			$mot_nhankhau = $model->mot_nhankhau($delete_data['socmnd']);
			foreach ($mot_nhankhau as $key => $value){
				$delete_data['hvt'] = $value['hvt'];
				$delete_data['tenkhac'] = $value['tenkhac'];
				$delete_data['gt'] = $value['gt'];
				$delete_data['ns'] = $value['ns'];
				$delete_data['dt'] = $value['dt'];
				$delete_data['tg'] = $value['tg'];
				$delete_data['quequan'] = $value['quequan'];
				$delete_data['tdhocvan'] = $value['tdhocvan'];
				$delete_data['nghenghiep'] = $value['nghenghiep'];
				$delete_data['mahk'] = $value['mahk'];
				$delete_data['qhvchuho'] = $value['qhvchuho'];
			}
			$model->insert_log_nhankhau($delete_data);
			$model->delete_nhankhau($delete_data['socmnd']);
			$this->session->set_flashdata('error', '- Xóa nhân khẩu thành công!');
		}
		$data_table = $model->nhankhau();
		$view->nhankhau($data_table);
	}
	public function xemnhankhau($socmnd)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data_nhankhau = $model->mot_nhankhau($socmnd);
		$view->xemnhankhau($socmnd, $data_nhankhau);
	}
	public function suanhankhau($socmnd)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('update') == 'submit') {
			$update_data['hvt'] = $this->input->post('hvt');
			$update_data['tenkhac'] = $this->input->post('tenkhac');
			$update_data['gt'] = $this->input->post('gt');
			$update_data['ns'] = $this->input->post('ns');
			$update_data['dt'] = $this->input->post('dt');
			$update_data['tg'] = $this->input->post('tg');
			$update_data['quequan'] = $this->input->post('quequan');
			$update_data['tdhocvan'] = $this->input->post('tdhocvan');
			$update_data['nghenghiep'] = $this->input->post('nghenghiep');
			if ($this->input->post('mavp') != NULL) {
				$update_data['mavp'] = $this->input->post('mavp');
			}
			$update_data['qhvchuho'] = $this->input->post('qhvchuho');
			if ($update_data['hvt'] == NULL || $update_data['gt'] == NULL || $update_data['ns'] == NULL || $update_data['dt'] == NULL || $update_data['tg'] == NULL || $update_data['quequan'] == NULL || $update_data['tdhocvan'] == NULL || $update_data['nghenghiep'] == NULL || $update_data['qhvchuho'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$mot_nhankhau = $model->mot_nhankhau($socmnd);
				foreach ($mot_nhankhau as $key => $value){
					$insert_log['socmnd'] = $socmnd;
					$insert_log['hvt'] = $value['hvt'];
					$insert_log['tenkhac'] = $value['tenkhac'];
					$insert_log['gt'] = $value['gt'];
					$insert_log['ns'] = $value['ns'];
					$insert_log['dt'] = $value['dt'];
					$insert_log['tg'] = $value['tg'];
					$insert_log['quequan'] = $value['quequan'];
					$insert_log['tdhocvan'] = $value['tdhocvan'];
					$insert_log['nghenghiep'] = $value['nghenghiep'];
					$insert_log['mahk'] = $value['mahk'];
					$insert_log['qhvchuho'] = $value['qhvchuho'];
					$insert_log['lydo'] = 'Được sửa bởi '.$this->session->userdata('manv').' - '.$this->session->userdata('hvt');
					$insert_log['type'] = 'Sửa';
					$insert_log['date'] = date("Y-m-d H:i:s");
				}
				$model->insert_log_nhankhau($insert_log);

				$model->suanhankhau($socmnd, $update_data);

				$this->session->set_flashdata('error', '- Sửa nhân khẩu thành công!');
			}
			
		}
		$data_nhankhau = $model->mot_nhankhau($socmnd);
		$view->suanhankhau($socmnd, $data_nhankhau);
	}
	public function themnhankhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('add') == 'submit') {
			$add_data['socmnd'] = $this->input->post('socmnd');
			$add_data['hvt'] = $this->input->post('hvt');
			$add_data['tenkhac'] = $this->input->post('tenkhac');
			$add_data['gt'] = $this->input->post('gt');
			$add_data['ns'] = $this->input->post('ns');
			$add_data['dt'] = $this->input->post('dt');
			$add_data['tg'] = $this->input->post('tg');
			$add_data['quequan'] = $this->input->post('quequan');
			$add_data['tdhocvan'] = $this->input->post('tdhocvan');
			$add_data['nghenghiep'] = $this->input->post('nghenghiep');
			if ($this->input->post('mavp') != NULL) {
				$add_data['mavp'] = $this->input->post('mavp');
			}
			$add_data['mahk'] = $this->input->post('mahk');
			$add_data['qhvchuho'] = $this->input->post('qhvchuho');
			
			if ($add_data['socmnd'] == NULL || $add_data['hvt'] == NULL || $add_data['gt'] == NULL || $add_data['ns'] == NULL || $add_data['dt'] == NULL || $add_data['quequan'] == NULL || $add_data['tdhocvan'] == NULL || $add_data['nghenghiep'] == NULL || $add_data['qhvchuho'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$check_only_cmnd = $model->check_only_cmnd($socmnd);
				if ($check_only_cmnd != 1) {
					$model->addnhankhau($add_data);
					$add_data['lydo'] = 'Được thêm bởi '.$this->session->userdata('manv').' - '.$this->session->userdata('hvt');
					$add_data['type'] = 'Thêm';
					$add_data['date'] = date("Y-m-d H:i:s");
					$model->insert_log_nhankhau($add_data);
					$this->session->set_flashdata('error', '- Thêm nhân khẩu thành công!');
				}
				else{
					$this->session->set_flashdata('error', '- Số CMND vừa nhập đã bị trùng!');
				}
			}
		}
		$data_hokhau = $model->hokhau();
		$view->themnhankhau($data_hokhau);
	}
	public function tamtru()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data_table = $model->tamtru();
		$view->tamtru($data_table);
	}
	public function suatamtru($id)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('edit') == 'submit') {
			$update_data['socmnd'] = $this->input->post('socmnd');
			$update_data['thoihan'] = $this->input->post('thoihan');
			$update_data['khaucu'] = $this->input->post('khaucu');
			$update_data['ngaybd'] = $this->input->post('ngaybd');
			$update_data['ngaykt'] = $this->input->post('ngaykt');
			$update_data['lydo'] = $this->input->post('lydo');
			if ($update_data['socmnd'] == NULL || $update_data['thoihan'] == NULL || $update_data['khaucu'] == NULL || $update_data['ngaybd'] == NULL || $update_data['ngaykt'] == NULL || $update_data['lydo'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$model->suatamtru($id, $update_data);
				$this->session->set_flashdata('error', '- Sửa thông tin tạm trú thành công!');
			}
		}

		$nguoi = $model->nhankhau();
		$data = $model->show_tamtru($id);
		$view->suatamtru($nguoi, $data);
	}
	public function xoatamtru($id)
	{
		$model = new M_Admin();
		$model->xoatamtru($id);
		$this->session->set_flashdata('error', '- Xóa thông tin tạm trú thành công!');
		redirect(base_url('admin/tamtru'));
	}
	public function themtamtru()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('add') == 'submit') {
			$add_data['socmnd'] = $this->input->post('socmnd');
			$add_data['thoihan'] = $this->input->post('thoihan');
			if ($this->input->post('khaumoi') != NULL) {
				$add_data['khaumoi'] = $this->input->post('khaumoi');
			}
			$add_data['ngaybd'] = $this->input->post('ngaybd');
			$add_data['ngaykt'] = $this->input->post('ngaykt');
			$add_data['lydo'] = $this->input->post('lydo');
			$add_data['loai'] = 'Tạm trú';
			if ($add_data['socmnd'] == NULL || $add_data['thoihan'] == NULL || $add_data['ngaybd'] == NULL || $add_data['ngaykt'] == NULL || $add_data['lydo'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$khaucu = $model->mot_nhankhau($add_data['socmnd']);
				foreach ($khaucu as $key => $value){
					$add_data['khaucu'] = $value['mahk'];
				}
				if ($add_data['khaucu'] == $add_data['khaumoi']) {
					$this->session->set_flashdata('error', '- Giá trị khẩu cũ và khẩu mới trùng nhau!');
				}
				else{
					$model->themtamtru($add_data);
					$this->session->set_flashdata('error', '- Thêm thông tin tạm trú thành công!');
					redirect(base_url('admin/tamtru'));
				}
			}
		}
		$nhankhau = $model->nhankhau();
		$view->themtamtru($nhankhau);
	}
	public function tamvang()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data_table = $model->tamvang();
		$view->tamvang($data_table);
	}
	public function suatamvang($id)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('edit') == 'submit') {
			$update_data['socmnd'] = $this->input->post('socmnd');
			$update_data['thoihan'] = $this->input->post('thoihan');
			$update_data['khaucu'] = $this->input->post('khaucu');
			$update_data['khaumoi'] = $this->input->post('khaumoi');
			$update_data['ngaybd'] = $this->input->post('ngaybd');
			$update_data['ngaykt'] = $this->input->post('ngaykt');
			$update_data['lydo'] = $this->input->post('lydo');
			if ($update_data['socmnd'] == NULL || $update_data['thoihan'] == NULL || $update_data['khaucu'] == NULL || $update_data['ngaybd'] == NULL || $update_data['ngaykt'] == NULL || $update_data['lydo'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$model->suatamvang($id, $update_data);
				$this->session->set_flashdata('error', '- Sửa thông tin tạm vắng thành công!');
			}
		}

		$nguoi = $model->nhankhau();
		$data = $model->show_tamvang($id);
		$view->suatamvang($nguoi, $data);
	}
	public function xoatamvang($id)
	{
		$model = new M_Admin();
		$model->xoatamvang($id);
		$this->session->set_flashdata('error', '- Xóa thông tin tạm vắng thành công!');
		redirect(base_url('admin/tamvang'));
	}
	public function themtamvang()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('add') == 'submit') {
			$add_data['socmnd'] = $this->input->post('socmnd');
			$add_data['thoihan'] = $this->input->post('thoihan');
			$add_data['ngaybd'] = $this->input->post('ngaybd');
			$add_data['ngaykt'] = $this->input->post('ngaykt');
			$add_data['lydo'] = $this->input->post('lydo');
			$add_data['loai'] = 'Tạm vắng';
			if ($add_data['socmnd'] == NULL || $add_data['thoihan'] == NULL || $add_data['ngaybd'] == NULL || $add_data['ngaykt'] == NULL || $add_data['lydo'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$khaucu = $model->mot_nhankhau($add_data['socmnd']);
				foreach ($khaucu as $key => $value){
					$add_data['khaucu'] = $value['mahk'];
				}
				$model->themtamvang($add_data);
				$this->session->set_flashdata('error', '- Thêm thông tin tạm vắng thành công!');
				redirect(base_url('admin/tamvang'));
			}
		}
		$nhankhau = $model->nhankhau();
		$hokhau = $model->hokhau();
		$view->themtamvang($nhankhau);
	}
	public function chuyenkhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data_table = $model->chuyenkhau();
		$view->chuyenkhau($data_table);
	}
	public function themchuyenkhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('add') == 'submit') {
			$add_data['socmnd'] = $this->input->post('socmnd');
			$add_data['khaumoi'] = $this->input->post('khaumoi');
			$add_data['lydo'] = $this->input->post('lydo');
			$add_data['loai'] = 'Chuyển khẩu';
			$add_data['ngayth'] = date("Y-m-d");
			if ($add_data['socmnd'] == NULL || $add_data['khaumoi'] == NULL || $add_data['lydo'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$khaucu = $model->mot_nhankhau($add_data['socmnd']);
				foreach ($khaucu as $key => $value){
					$add_data['khaucu'] = $value['mahk'];
					$qhvchuho = $value['qhvchuho'];
				}
				if ($add_data['khaucu'] == $add_data['khaumoi']) {
					$this->session->set_flashdata('error', '- Giá trị khẩu cũ và khẩu mới trùng nhau!');
				}
				else{
					$model->themchuyenkhau($add_data);
					$model->update_chuyenkhau_nhankhau($qhvchuho, $add_data);
					$this->session->set_flashdata('error', '- Thêm thông tin chuyển khẩu thành công!');
					redirect(base_url('admin/chuyenkhau'));
				}
			}
		}
		$nhankhau = $model->nhankhau();
		$hokhau = $model->hokhau();
		$view->themchuyenkhau($nhankhau, $hokhau);
	}
	public function xoachuyenkhau($id)
	{
		$model = new M_Admin();
		$select = $model->select_cktk_nhankhau($id);
		foreach ($select as $key => $value){
			$socmnd = $value['socmnd'];
			$khaucu = $value['khaucu'];
			$substr = explode(' - ', $value['qhvchuho']);
		}
		$qhvchuho = $substr[0];
		$model->update_lai_nhankhau($socmnd, $khaucu, $qhvchuho);
		$model->xoachuyenkhau($id);
		$this->session->set_flashdata('error', '- Xóa thông tin chuyển khẩu thành công!');
		redirect(base_url('admin/chuyenkhau'));
	}
	public function suachuyenkhau($id)
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('edit') == 'submit') {
			$update_data['socmnd'] = $this->input->post('socmnd');
			$update_data['khaumoi'] = $this->input->post('khaumoi');
			$update_data['lydo'] = $this->input->post('lydo');
			$update_data['loai'] = 'Chuyển khẩu';
			$update_data['ngayth'] = date("Y-m-d");
			if ($update_data['socmnd'] == NULL || $update_data['khaumoi'] == NULL || $update_data['lydo'] == NULL) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$khaucu = $model->mot_nhankhau($update_data['socmnd']);
				foreach ($khaucu as $key => $value){
					$update_data['khaucu'] = $value['mahk'];
					// $qhvchuho = $value['qhvchuho'];
				}
				if ($update_data['khaucu'] == $update_data['khaumoi']) {
					$this->session->set_flashdata('error', '- Giá trị khẩu cũ và khẩu mới trùng nhau!');
				}
				else{
					$model->suachuyenkhau($id, $update_data);
					$model->update_suachuyenkhau_nhankhau($update_data);
					$this->session->set_flashdata('error', '- Sửa thông tin chuyển khẩu thành công!');
					redirect(base_url('admin/chuyenkhau'));
				}
			}
		}
		$data = $model->show_chuyenkhau($id);
		$nhankhau = $model->nhankhau();
		$hokhau = $model->hokhau();
		$view->suachuyenkhau($data, $nhankhau, $hokhau);
	}
	public function tachkhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		$data_table = $model->tachkhau();
		$view->tachkhau($data_table);
	}
	public function themtachkhau()
	{
		$model = new M_Admin();
		$view = new V_Admin();
		if ($this->input->post('add') == 'submit') {
			$add_data['socmnd'] = $this->input->post('socmnd');
			$dc = $this->input->post('dc');
			$add_data['khaumoi'] = $this->input->post('khaumoi');
			$add_data['lydo'] = $this->input->post('lydo');
			$add_data['loai'] = 'Tách khẩu';
			$add_data['ngayth'] = date("Y-m-d");
			if ($add_data['socmnd'] == NULL || $add_data['khaumoi'] == NULL || $add_data['lydo'] == NULL || $dc == NULL ) {
				$this->session->set_flashdata('error', '- Vui lòng điền đầy đủ thông tin!');
			}
			else{
				$khaucu = $model->mot_nhankhau($add_data['socmnd']);
				foreach ($khaucu as $key => $value){
					$tench = $value['hvt'];
					$add_data['khaucu'] = $value['mahk'];
				}
				if ($add_data['khaucu'] == $add_data['khaumoi']) {
					$this->session->set_flashdata('error', '- Giá trị khẩu cũ và khẩu mới trùng nhau!');
				}
				else{
					$check_mahk = $model->check_mahk($add_data['khaumoi']);
					if ($check_mahk == 1) {
						$this->session->set_flashdata('error', '- Mã hộ khẩu đã tồn tại!');
					}
					else{
						$model->them_ho_khau($add_data['khaumoi'], $add_data['socmnd'], $tench, $dc);
						$model->themtachkhau($add_data);
						$model->update_nhankhau_tachkhau($add_data['socmnd'], $add_data['khaumoi'], $add_data['khaucu']);
						$this->session->set_flashdata('error', '- Thêm thông tin tách khẩu thành công!');
						redirect(base_url('admin/chuyenkhau'));
					}
				}
			}
		}
		$nhankhau = $model->nhankhau();
		$view->themtachkhau($nhankhau);
	}
}
