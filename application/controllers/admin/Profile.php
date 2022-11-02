<?php

class Profile extends CI_Controller {

    public function __construct() {
        // session untuk login
        parent::__construct();
        if(!empty($this->session->userdata('is_login') == FALSE)){
            // alert peringatan bahwa harus login
            $this->session->set_flashdata('failed','Anda Belum login, silahkan login terlebih dahulu !');
            redirect(base_url('admin/login'));
        }
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        $this->load->view('login/profile',$data);
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('login/profile',$data);

        } else {

            //$email = array('email' => $this->session->userdata('email'));
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');

            $data = array(
                'username' => $nama
            );
            

            $where = array(
                'email' => $email
            );
            $this->lkeModel->update_data('user',$data,$where);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin/dashboard');
        }
    }

}

?>