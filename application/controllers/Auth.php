<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));	
		$this->load->model('M_Login');
		$this->load->view('V_Login');
		
	}
	public function login()
	{
		$view = new V_Login();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
		if($this->form_validation->run() == FALSE){
			
		}
		else{
			// Đúng
			$model = new M_Login();
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$check_account = $model->check_account($email, $password);
			if ($check_account == 1) {
				// Lưu thông tin vào Session
				$result = $model->show_account($email, $password);
				foreach ($result as $key => $value){
					$new_session = array(
					'manv' => $value['manv'],
					'hvt' => $value['hvt'],
					'gt' => $value['gt'],
					'ns' => $value['ns'],
					'sdt' => $value['sdt'],
					'email' => $value['email'],
					'capbac' => $value['capbac'],
					'chucvu' => $value['chucvu'],
					'donvi' => $value['donvi'],
					'quyenhan' => $value['quyenhan'],
					
					);
				}
				$this->session->set_userdata($new_session);
				$this->session->set_flashdata('success', 'Đăng nhập thành công!');
				redirect(base_url());
			}
			else{
				// Sai thông tin
				$this->session->set_flashdata('error', '- Tài khoản hoặc mật khẩu không đúng!<br>- Vui lòng nhập lại!');
			}
		}
		$view->index();
	}
	private function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	public function forgot_password()
	{
		$email = $this->input->post('email_forgot');
		if ($email == NULL) {
			$this->session->set_flashdata('error', 'Vui lòng không để trống!');
		}
		else{
			$model = new M_Login();
			$result = $model->check_email($email);
			if ($result == 1) {
				$code = $this->generateRandomString();
				$model->set_code($email, $code);
				$link = base_url('auth/reset_password/').'?email='.$email.'&code='.$code;
				$message = 'Xin chào !<br>Bạn đã yêu cầu cấp lại mật khẩu tài khoản của bạn trên hệ thống NHK Bắc Ninh.<br>Nếu bạn thực hiện việc này, hãy bấm vào <a href="'.$link.'">đây</a> để đặt lại mật khẩu!<br>Hoặc đường liên kết sau: '.$link.'<br>- Nếu bạn không thực hiện việc này, hãy bỏ qua thư của chúng tôi.<br>Cảm ơn bạn!';
				$result_email = $this->sendMail($email, $subject = 'Đặt lại mật khẩu', $message);
				if ($result_email == 1) {
					$this->session->set_flashdata('error', 'Thư đã được gửi đến Email.<br>Lưu ý: Có thể thư của chúng tôi ở thư mục <strong>SPAM</strong>!!');
				}
				else{
					$this->session->set_flashdata('error', 'Lỗi!!!<br>'.$message);
				}
			}
			else{
				$this->session->set_flashdata('error', 'Email bạn nhập vào không có trong hệ thống của chúng tôi!!');
			}
		}
		redirect(base_url('auth/login'));
	}
	public function reset_password()
	{
		if ($this->input->get('email') == NULL || $this->input->get('code') == NULL) {
			redirect(base_url('auth/login'));
		}
		else{
			$email = $this->input->get('email');
			$code = $this->input->get('code');
			$model = new M_Login();
			$result = $model->check_code($email, $code);
			if ($result == 1) {
				$view = new V_Login();
				$view->reset_password();
				if ($this->input->post('newpass')) {
					$newpass = md5($this->input->post('newpass'));
					$model->change_pass($email, $newpass, $code);
					$this->session->set_flashdata('error', '- Mật khẩu của bạn đã được thay đổi!');
					redirect(base_url('auth/login'));
				}
			}
			else{
				$this->session->set_flashdata('error', '- Email hoặc Code không chính xác!');
				redirect(base_url('auth/login'));
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth/login'));
	}
	private function sendMail($email, $subject, $message)
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
  			'smtp_user' => '97countonme@gmail.com',
  			'smtp_pass' => 'sgjfdfcyajgumqcq',
  			'mailtype' => 'html',
  			'charset' => 'UTF-8',
  			'wordwrap' => TRUE
  		);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
     	$this->email->from('97countonme@gmail.com');
    	$this->email->to($email);
    	$this->email->subject($subject);
    	$this->email->message($message);
    	if($this->email->send())
    	{
    		$result = 1;
    	}
    	else
    	{
    		$result = 0;
    		// show_error($this->email->print_debugger());
    	}
    	return $result;

    }
}
