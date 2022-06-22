<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_tamu extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Daftar_tamu_model');
      $this->load->model('Login_model');
   }

   public function index()
   {
      $this->Login_model->validation();
      $data['title'] = 'Input Tamu';
      $data['session_name'] = $this->session->userdata('username');

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('input_tamu', $data);
      $this->load->view('templates/footer');
   }

   public function input_aksi()
   {
      $this->_rules();

      if ($this->form_validation->run() == FALSE) {
         $this->index();
      } else {
         $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
         );

         $this->Daftar_tamu_model->insert_data($data, 'tamu');
         $this->session->set_flashdata(
            'pesan', 
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data berhasil ditambahkan!
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>'
         );
         redirect('daftar_tamu');
      }
   }

   public function _rules()
   {
      $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s harus diisi!'));
      $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s harus diisi!'));
      $this->form_validation->set_rules('no_telp', 'No. Telepon', 'required', array('required' => '%s harus diisi!'));
   }
}

/* End of file Controllername.php */
