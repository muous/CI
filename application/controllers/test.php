<?php
class Test extends CI_Controller{
	public function index(){
		$this->load->view('index');
	}
	public function parameters(){
		$this->load->helper('download');
		$data = file_get_contents("public/2.jpg"); // 读文件内容
		force_download('2.jpg',$data);
	}
	
}