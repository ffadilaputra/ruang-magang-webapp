<?php
      class Login_model extends CI_Model{

        public function login($nama,$password){
            $this->db->where('nama',$nama);
            $this->db->where('password',md5($password));
              $query = $this->db->get('us_user');
                if ($query->num_rows() == 1) {
                  return $query->result();
                }else{
                  return false;
                }
        }
      }

?>