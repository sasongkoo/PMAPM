<?php

class Filter_Model extends CI_Model {

    function filter_ketua($table)
    {
        $this->db->where('area', 'KETUA');
        return $this->db->get($table);
    }
    function filter_wakilKetua($table)
    {
        $this->db->where('area', 'WAKIL KETUA');
        return $this->db->get($table);
    }
    function filter_wakilKetuaMr($table)
    {
        $this->db->where('area', 'WAKIL KETUA/MR');
        return $this->db->get($table);
    }
    function filter_panitera($table)
    {
        $this->db->where('area', 'PANITERA');
        return $this->db->get($table);
    }
    function filter_sekretaris($table)
    {
        $this->db->where('area', 'SEKRETARIS');
        return $this->db->get($table);
    }
}

?>