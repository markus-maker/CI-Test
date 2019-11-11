<?php
class Login extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('Login_model');
	}
 
	public function index() 
	{
		$this->load->view("login");
	}
 
	public function user()
	{
		$data['login'] = $this->Login_model->login();
		$this->load->view('user', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
//INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, 'admin', MD5('admin'));
//https://jaranguda.com/membuat-login-sederhana-di-codeigniter-3/
//https://www.alkarizma.com/artikel/membuat-form-login-dengan-codeigniter.html