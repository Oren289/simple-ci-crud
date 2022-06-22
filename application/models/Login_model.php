<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

   public function authLogin($username, $password)
   {
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $query = $this->db->get('tb_user');
      if($query->num_rows()>0){
         foreach($query->result() as $row){
            $sesdata = array(
               'username' => $row->username,
            );
         }
         $this->session->set_userdata($sesdata);
         redirect('daftar_tamu');
      }else{
         $this->session->set_flashdata('pesan', 'username atau password salah!');
         redirect('login');
      }
   }

   public function validation()
   {
      $username = $this->session->userdata('username');
      if(empty($username)){
         $this->session->sess_destroy();
         redirect('login');
      }
   }

   public function input_register($data, $table)
   {
      $this->db->insert($table, $data);
   }
}

/* End of file Login_model.php */
