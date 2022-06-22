<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

   
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Register_model');
   }
   

   public function index()
   {
      $data['title'] = 'Register';

      $this->load->view('register');
   }

   public function register_aksi()
   {
      $data = array(
         'username' => $this->input->post('username'),
         'password' => $this->input->post('password'),
      );

      $this->Register_model->input_register($data);
      $this->session->set_flashdata(
         'pesan', 
         '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil membuat akun!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>'
      );
      redirect('login');
   }
}
/* End of file Register.php */
