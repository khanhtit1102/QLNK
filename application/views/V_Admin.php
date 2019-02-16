<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_Admin
{
	
	public function index($data)
	{
		include "res/dashboard.php";
	}
	public function hokhau($data_table)
	{
		include "res/hokhau.php";
	}
	public function suahokhau($data, $mahk)
	{
		include "res/suahokhau.php";
	}
	public function themhokhau()
	{
		include "res/themhokhau.php";
	}
	public function xemhokhau($mahk, $data_table)
	{
		include "res/xemhokhau.php";
	}
	public function nhankhau($data_table)
	{
		include "res/nhankhau.php";
	}
	public function xemnhankhau($socmnd, $data_nhankhau)
	{
		include "res/xemnhankhau.php";
	}
	public function suanhankhau($socmnd, $data_nhankhau)
	{
		include "res/suanhankhau.php";
	}
	public function themnhankhau($data_hokhau)
	{
		include "res/themnhankhau.php";
	}
	public function tamtru($data_table)
	{
		include "res/tamtru.php";
	}
	public function suatamtru($nguoi, $data)
	{
		include "res/suatamtru.php";
	}
	public function themtamtru($nhankhau, $hokhau)
	{
		include "res/themtamtru.php";
	}
	public function tamvang($data_table)
	{
		include "res/tamvang.php";
	}
	public function suatamvang($nguoi, $data)
	{
		include "res/suatamvang.php";
	}
	public function themtamvang($nhankhau)
	{
		include "res/themtamvang.php";
	}
	public function chuyenkhau($data_table)
	{
		include "res/chuyenkhau.php";
	}
	public function themchuyenkhau($nhankhau, $hokhau)
	{
		include "res/themchuyenkhau.php";
	}
	public function suachuyenkhau($data, $nhankhau, $hokhau)
	{
		include "res/suachuyenkhau.php";
	}
	public function tachkhau($data_table)
	{
		include "res/tachkhau.php";
	}
	public function themtachkhau($nhankhau)
	{
		include "res/themtachkhau.php";
	}
}