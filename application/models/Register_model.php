<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

   public function input_register($data)
   {
      $this->db->insert('tb_user', $data);
   }

}

/* End of file Register_model.php */
