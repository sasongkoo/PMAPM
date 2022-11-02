<?php

class FormPenilaian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('lkeModel');
        $this->load->model('Filter_Model');
        
        if(!empty($this->session->userdata('is_login') == FALSE)){
            // alert peringatan bahwa harus login
            $this->session->set_flashdata('failed','Anda Belum login, silahkan login terlebih dahulu !');
            redirect(base_url('admin/login'));
        }
    }

    public function index()
    {   
        $data['checklist'] = $this->lkeModel->get_data('checklist')
            ->result();
        $this->load->view('form/formPenilaian',$data);
    }

    public function tampilData($id)
    {
        $where = array('no' => $id);
        $data['checklist'] = $this->db->query("Select * FROM checklist WHERE
            no = '$id'")->result();
        $this->load->view('form/formPenilaian',$data);
    }

    public function tampilA($id)
    {
        $where = array('no' => $id);
        $data['checklist'] = $this->db->query("Select * FROM checklist WHERE
            no = '$id'")->result();
        $this->load->view('form/formA',$data);
    }

}

?>