<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_tamu_model extends CI_Model {

   public function get_data($table){
      return $this->db->get($table);
   }

   public function insert_data($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function hapus_tamu($where, $table){
      $this->db->where($where);
      $this->db->delete($table);
   }

   public function edit_tamu($where, $table)
   {  
      return $this->db->get_where($table, $where);
   }

   public function update_tamu($where, $data, $table)
   {
      $this->db->where($where);
      $this->db->update($table, $data);
   }
}

/* End of file ModelName.php */
