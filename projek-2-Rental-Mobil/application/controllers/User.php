<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Register';
        $this->load->view('Register.php', $data);
    }

    public function upload()
    {
        $this->load->model('dbrentalmobil/users_model', 'users');
        $config['upload_path']          = './img/profil/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 6000;
        $config['max_height']           = 6000;

        $id = $this->input->post('id');

        $explode = explode('.' , $_FILES['userimage']['name']);
        $extension = end($explode);
        $new_name = 'profil'.$id.'.'. $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        $upd = [$new_name, $id];
        
        if (!$this->upload->do_upload('userimage')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error['error'].'</div>');
            redirect('dashboard');
            // $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            // die(print_r($data));
            $this->users->updateFoto($upd);

            $this->load->model('dbrentalmobil/users_model', 'users');
            $users = $this->users->findById($id);

            $this->session->unset_userdata('foto');
            $this->session->set_userdata('foto', $users['foto']);

            redirect('dashboard', $data);
            // $this->load->view('das', $data
        }
    }
}
