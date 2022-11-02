<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('lkeModel');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login/login');
        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

        //if ($this->form_validation->run()) {

        //    $email = $this->input->post('email');
        //    $password = $this->input->post('password');
        //    $data = $this->lkeModel->get_user($email);

        //    if (count($data) > 0) {
        //        $hash = '$2y$10$u/d8QZZ0w574tBQ1uuhTX.F2.ZZhV864bgEkLEyrG.WrJULgKzE2S';
        //        if (password_verify($password, $hash)) {
        //            $this->session->set_userdata('is_login', TRUE);
        //            redirect('admin/dashboard');
        //        } else {
        //            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //                <strong>Password salah.</strong>
        //                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //            </div>');
        //            redirect('admin/login');
        //        }
        //    } else {
        //        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //                <strong>Email belum terdaftar.</strong>
        //                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //            </div>');
        //        redirect('admin/login');
        //    }
        //} else {
        //    $this->load->view('login/login');
        //}


        //$this->_rules();

        //if ($this->form_validation->run() == FALSE) {
        //    $data['title'] = "Login Admin";

        //    $this->load->view('login/login');
        //} else {
        //    $username = $this->input->post('username');
        //    $password = $this->input->post('password');


        //    $cek = $this->lkeModel->cek_login($username,$password);

        //    if ($cek == FALSE) {
        //        $this->session->set_flashdata('peringatan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //                <strong>Username atau password salah!</strong>
        //                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //            </div>');
        //        redirect('admin/login');
        //    } else {
        //        $this->session->set_userdata('username', $cek->username);
        //        $this->session->set_userdata('id', $cek->id);
        //        $this->session->set_userdata('is_login', TRUE);
        //        redirect('admin/dashboard');
        //    }
        //}
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'username',
            'username',
            'required'
        );
        $this->form_validation->set_rules(
            'password',
            'password',
            'required'
        );
    }

    public function login_proses()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            if ($this->lkeModel->m_cek_mail()->num_rows() == 1) {

                $db = $this->lkeModel->m_cek_mail()->row();
                if (hash_verified($this->input->post('password'), $db->password)) {
                    $data_login = array(
                        'is_login' => TRUE,

                        'id'  => $db->id,

                        'email'  => $db->email,

                        'username'   => $db->username,

                        'otoritas'   => $db->otoritas
                    );
                    $this->session->set_userdata($data_login);
                    if($this->session->userdata('otoritas') == 'ADMIN'){
                        redirect('admin/dashboard');
                    } else if ($this->session->userdata('otoritas') == 'KETUA'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'WAKIL KETUA'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'WAKIL KETUA/MR'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'PANITERA'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'SEKRETARIS'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'HAKIM'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'PANMUD HUKUM'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'PANMUD PIDANA'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'PANMUD PERDATA'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'JURUSITA/JURUSITA PENGGANTI'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'PANITERA PENGGANTI'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'KEPEGAWAIAN & ORTALA'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'UMUM KEUANGAN'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'PTIP'){
                        redirect('admin/dashOtoritas');
                    } else if ($this->session->userdata('otoritas') == 'KOORDINATOR AREA'){
                        redirect('admin/dashOtoritas');
                    } else {
                        $this->session->set_flashdata('warning', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Login gagal: Akses Ditolak.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                        redirect('admin/login');
                    }
                } else {
                    $this->session->set_flashdata('pesan', 'Login gagal: password salah!');

                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Login gagal: email salah!');

                redirect('admin/login');
            }
        } else {
            $this->load->view('login/login');
        }
    }

}
