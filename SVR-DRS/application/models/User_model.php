<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }


    public function get_user($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('User_ID' => $id));
        return $query->row_array();
    }

    public function get_user_by_usn($usn=NULL)
    {
      if($usn!=NULL)
      {
        $query = $this->db->get_where('users',array('Username'=>$usn));
        return $query->row_array();
      }
    }

    public function set_user()
    {

        $pass = $this->input->post('password');
        $data = array(
          'email' => $this->input->post('email'),
            'Username' => $this->input->post('username'),
            'password' => password_hash($pass,PASSWORD_DEFAULT)
        );

        return $this->db->insert('users', $data);
    }

    public function set_profile_pic($pic=NULL)
    {
      $this->db->set('Profile_Pic',"'".$pic."'" , FALSE);
      $this->db->where('User_ID', $_SESSION['User_ID']);
      $this->db->update('users');
    }
}
