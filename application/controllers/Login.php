<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Login_model');
   }
   

   public function index()
   {
      $data['title'] = 'Login';

      $this->load->view('login', $data);
   }

   public function ceklogin()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->Login_model->authLogin($username, $password);
   }

   public function logout()
   {
      $this->session->set_userdata('username', FALSE);
      $this->session->sess_destroy();
      redirect('daftar_tamu');
   }

   // public function register_aksi()
   // {
   //    $password = $this->input->post('password');
   //    $check_password = $this->input->post('check_password');

   //    if ($this->form_validation->run() == FALSE) {
   //       $this->index();
   //    } 
   //    // else if($password != $check_password){
   //    //    $this->session->set_flashdata(
   //    //       'pesan', 
   //    //       '<div class="alert alert-success alert-dismissible fade show" role="alert">
   //    //          Password tidak konsisten!
   //    //          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   //    //             <span aria-hidden="true">&times;</span>
   //    //          </button>
   //    //       </div>'
   //    //    );
   //    //    redirect('register');
   //    // } 
   //    else {
   //       $data = array(
   //          'username' => $this->input->post('username'),
   //          'password' => $this->input->post('password'),
   //       );

   //       $this->Login_model->input_register($data, 'tb_user');
   //       $this->session->set_flashdata(
   //          'pesan', 
   //          '<div class="alert alert-success alert-dismissible fade show" role="alert">
   //             Berhasil membuat akun!
   //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   //                <span aria-hidden="true">&times;</span>
   //             </button>
   //          </div>'
   //       );
   //       redirect('login');
   //    }
   // }
}

/* End of file Controllername.php */
