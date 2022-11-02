<?php

class Changepassword extends CI_Controller {

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
        $this->load->view('login/changepass');
    }

    public function prosesganti()
    {
        $this->form_validation->set_rules('newpass', 'New Password', 'required|matches[confpass]');
        $this->form_validation->set_rules('confpass', 'Confirm Password', 'required');

        if($this->form_validation->run() != FALSE) {
            $newpass = $this->input->post('newpass');
            $password = password_hash($newpass,PASSWORD_DEFAULT);
            $data = array('password' => $password);
            $user = array('username' => $this->session->userdata('username'));

            $this->lkeModel->gantipassword('user',$data,$user);
            $this->session->set_flashdata('berhasil','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Password berhasil diubah.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');

            if ($this->session->userdata('otoritas') == 'ADMIN') {
                redirect('admin/dashboard');
            } else if ($this->session->userdata('otoritas') == 'KETUA') {
                redirect('admin/dashOtoritas');
            }
        } else {
            $this->load->view('login/changepass');
        }

    }

}

?>