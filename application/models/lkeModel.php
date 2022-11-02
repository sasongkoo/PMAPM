<?php

class LkeModel extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cek_login()
    {
        $username   = set_value('username');
        $password   = set_value('password');

        $result     = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function get_user($id)
    {
        $this->db->select('*');
        $this->db->where('email', $id);
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

    public function m_cek_mail()
    {
        return $this->db->get_where('user', array('username' => $this->input->post('username')));
    }

    public function get_useremail($email)
	{
		$query = $this->db->get_where('user',array('email'=>$email));
		return $query->row_array();

	}

    public function get_username($username)
    {
        $query = $this->db->get_where('user',array('username'=>$username));
		return $query->row_array();
    }

    public function insert($table, $data)
	{

		$res = false;

		try {

			$this->db->insert($table, $data);

			if ($this->db->insert_id()) {
				$res = $this->db->insert_id();
			} else {
				$res = $this->db->affected_rows();
			}
		} catch (Exception $e) {
			die("Data Model : " . $e->getMessage());
		}

		return $res;
	}

    public function get_area($area_name)
    {
        return $this->db->get_where('user', ['area' => $area_name])->row_array();
    }

    public function filter_area($area)
    {
        $this->db->distinct();
        $this->db->select($area);
        $this->db->from('checklist');
        return $this->db->get();

    }

    public function gantipassword($table,$data,$where)
    {
        $this->db->update($table,$data,$where);
    }
}
