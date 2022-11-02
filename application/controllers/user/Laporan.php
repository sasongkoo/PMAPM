<?php

class Laporan extends CI_Controller {

    public function index() 
    {
        $data['checklist'] = $this->lkeModel->get_data('checklist')
            ->result();
        $this->load->view('user/laporan',$data);
    }

    
}

?>