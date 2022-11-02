<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashOtoritas extends CI_Controller{

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
        // menampilkan halaman dashboard
        $this->data = [
            'userx'     => $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row(),
        ];  
        $this->load->view('admin/dashOtoritas',$this->data);
    }

    public function logout()
    {
        // logout admin
        $this->session->unset_userdata('is_login');

		$this->session->unset_userdata('username');

		$this->session->unset_userdata('email');

        $this->session->unset_userdata('otoritas');

		session_destroy();

		//$this->session->set_flashdata('pesan', 'Sign Out Berhasil!');

		redirect('home/home');
        //$this->session->sess_destroy();
        //redirect('home/home');
    }
}

?>