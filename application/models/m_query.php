<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_query extends CI_Model {

    var $table = "users";
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(['username'=>$username, 'password'=>md5($password)]);
        $return = $this->db->get('');
        if($return->num_rows() > 0){
            foreach ($return->result() as $row)
            {
                if($row->level =="admin")
                {
                    $session = array('level' =>$row);
                }
                $this->load->view('v_dashboard');
            }
        }
        else
        {
            $this->session->set_flashdata('pesan', 'Username/Password tidak valid!');
            $this->load->view('C_login');
        }
    }
}
