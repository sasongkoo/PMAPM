<?php

class DataTabelUser extends CI_Controller{

    public function __construct() {
        parent::__construct();
        if(!empty($this->session->userdata('is_login') == FALSE)){
            // alert peringatan bahwa harus login
            $this->session->set_flashdata('failed','Anda Belum login, silahkan login terlebih dahulu !');
            redirect(base_url('admin/login'));
        }
    }
    
    public function index()
    {
        $data['user'] = $this->lkeModel->get_data('user')
            ->result();
        $this->load->view('admin/tabelUser',$data);
    }

    public function updateData($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->db->query("Select * FROM user WHERE
            id = '$id'")->result();
        $this->load->view('admin/formUpdateDataUser',$data);
    }

    public function updateDataAksi()
    {
        $this->_rules();
        $id = $this->input->post('id');
        if($this->form_validation->run() == FALSE){
            $this->updateData($id);
        } else {
            $username       = $this->input->post('username');
            $email          = $this->input->post('email');
            $pass           = $this->input->post('password');
            $password       = password_hash($pass,PASSWORD_DEFAULT);
            $otoritas       = $this->input->post('otoritas');
            $user           = array('username' => $this->input->post('username'));
            
            $data = array(
                'username' => $username,
                'email' => $email,
                'otoritas' => $otoritas
            );
            
            $data2          = array('password' => $password);

            $where = array(
                'id' => $id
            );

            $this->lkeModel->update_data('user',$data,$where);
            $this->lkeModel->gantipassword('user',$data2,$user);
            $this->session->set_flashdata('messageuser','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/dataTabelUser');
        }
    }

    public function tambahData()
    {   
        $this->load->view('admin/formTambahAdmin');
    }

    public function tambahDataAksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambahData();
        } else {
            $username       = $this->input->post('username');
            $email          = $this->input->post('email');
            $pass           = $this->input->post('password');
            $password       = password_hash($pass,PASSWORD_DEFAULT);
            $otoritas       = $this->input->post('otoritas');

            $result = $this->lkeModel->get_username($username);
            if(isset($result['username']) == $username) {
                $this->session->set_flashdata('messageuser','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Username sudah digunakan.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/tambahAdmin');
            } else {

                $data = array(
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'otoritas' => $otoritas
                );
                
                $this->lkeModel->insert_data($data,'user');
                $this->session->set_flashdata('pesanuser','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>User berhasil ditambahkan!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('admin/dataTabelUser');
            }
        }
    }

    public function deleteData($id)
    {
        $where = array('id' => $id);
        $this->lkeModel->delete_data($where,'user');
        $this->session->set_flashdata('pesandata','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('admin/dataTabelUser');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username','Username',
        'required');
        $this->form_validation->set_rules('email','Email',
        'required');
        $this->form_validation->set_rules('password','Password',
        'required');    
    }

}

?>