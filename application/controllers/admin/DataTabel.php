<?php

class DataTabel extends CI_Controller{

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
        $data['filter'] = $this->lkeModel->filter_area('area');
        $data['checklist'] = $this->lkeModel->get_data('checklist')
            ->result();
        $this->load->view('admin/tabel',$data);
    }

    public function updateData($id)
    {
        $where = array('no' => $id);
        $data['checklist'] = $this->db->query("Select * FROM checklist WHERE
            no = '$id'")->result();
        $this->load->view('admin/formUpdate',$data);
    }

    public function updateDataAksi()
    {
        $this->_rules();
        $id = $this->input->post('no');
        if($this->form_validation->run() == FALSE){
            $this->updateData($id);
        } else {
            $area       = $this->input->post('area');
            $penilaian  = $this->input->post('penilaian');
            $area_zi    = $this->input->post('area_zi');
            $a          = $this->input->post('a');
            $file       = $this->input->post('file');

            $data = array(
                'area' => $area,
                'penilaian' => $penilaian,
                'area_zi' => $area_zi,
                'a' => $a,
                'file' => $file,
            );

            $where = array(
                'no' => $id
            );

            $this->lkeModel->update_data('checklist',$data,$where);
            $this->session->set_flashdata('pesandata','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/dataTabel');
        }
    }

    public function tambahData()
    {   
        $this->load->view('admin/formTambah');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambahData();
        } else {
            $area       = $this->input->post('area');
            $penilaian  = $this->input->post('penilaian');
            $area_zi    = $this->input->post('area_zi');
            $a          = $this->input->post('a');
            $file       = $this->input->post('file');

            $data = array(
                'area' => $area,
                'penilaian' => $penilaian,
                'area_zi' => $area_zi,
                'a' => $a,
                'file' => $file,
            );
            
            $this->lkeModel->insert_data($data,'checklist');
            $this->session->set_flashdata('pesandata','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/dataTabel');
        }
    }

    public function deleteData($id)
    {
        $where = array('no' => $id);
        $this->lkeModel->delete_data($where,'checklist');
        $this->session->set_flashdata('pesandata','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/dataTabel');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('area','Area',
        'required');
        $this->form_validation->set_rules('penilaian','Penilaian',
        'required');
        $this->form_validation->set_rules('area_zi','Area ZI',
        'required');
        $this->form_validation->set_rules('a','A',
        'required');
        $this->form_validation->set_rules('file','File',
        'required');
    }

    public function area()
    {
        $area_name = $this->input->get('area');
        $data = $this->lkeModel->get_area($area_name);
        var_dump($data);
        die;
    }

    public function filter()
    {
        
        $area = $this->input->post('area');
        

        $data['hasil'] = $this->lkeModel->filter_area($area)->result_array();
        $this->load->view('admin/hasilFilter',$data);
        
    }

    public function FunctionName()
    {
        # code...
    }
}

?>