<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_tamu extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Daftar_tamu_model');
      $this->load->model('Login_model');

   }
   
   public function index()
   {
      $data['title'] = 'Daftar Tamu';
      $data['tamu'] = $this->Daftar_tamu_model->get_data('tamu')->result();
      $data['session_name'] = $this->session->userdata('username');

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('daftar_tamu', $data);
      $this->load->view('templates/footer');
   }

   public function hapus($id) 
   {
      $this->Login_model->validation();

      $where = array('id_tamu' => $id);
      $this->Daftar_tamu_model->hapus_tamu($where, 'tamu'); 
      $this->session->set_flashdata(
         'pesan', 
         '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>'
      );
      redirect('daftar_tamu');
   }

   public function edit($id)
   {
      $this->Login_model->validation();

      $data['title'] = 'Edit Tamu';
      $data['tamu'] = $this->Daftar_tamu_model->get_data('tamu')->result();
      $data['session_name'] = $this->session->userdata('username');

      $where = array('id_tamu'=>$id);
      $data['tamu'] = $this->Daftar_tamu_model->edit_tamu($where, 'tamu')->result();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('edit_tamu', $data);
      $this->load->view('templates/footer');
   }

   public function update(){
      $id = $this->input->post('id_tamu');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('no_telp');

      $data = array(
         'nama' => $nama,
         'alamat' => $alamat,
         'no_telp' => $no_telp
      );

      $where = array('id_tamu' => $id);

      $this->Daftar_tamu_model->update_tamu($where, $data, 'tamu');
      $this->session->set_flashdata(
         'pesan', 
         '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>'
      );
      redirect('daftar_tamu');
   }
}

/* End of file Controllername.php */
