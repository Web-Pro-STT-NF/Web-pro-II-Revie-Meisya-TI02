<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$data['title'] = 'Dashboard';
		$data['home'] = 'Home';		
		$data['alamat'] = 'Profile';

		$id = $this->session->userdata('id');
		$this->load->model('dbrentalmobil/users_model', 'users');
		$data['list_users'] = $this->users->findById($id);

		$this->load->view('Dashboard/index.php', $data);
	}
}
