<?php 

class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();

		// mengecek apakah sesion status, untuk mendeteksi apakah user atau admin sudah login atau belum. 
		if($this->session->userdata('status') != "login"){ 
			redirect(base_url("login")); //jika user tidak berhasil login maka akan diarahkan ke halaamn login
		}
	}

//menampilkan view v_andmin
	function index(){
		$this->load->view('v_admin');
	}
}