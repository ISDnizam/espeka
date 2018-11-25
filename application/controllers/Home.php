<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
   function __construct(){
      parent::__construct();
      $this->id_pengguna = $this->session->userdata('id_pengguna');
   }

   function index(){
      $data['title'] = "Hommepage";
  	  $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $data['list_kriteria'] = $this->GlobalModel->get_data('kriteria')->result();
      $data['list_karyawan'] = $this->GlobalModel->get_data('karyawan')->result();
      if($this->id_pengguna){
       $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $this->load->view('layout/header', $data);
      if($this->id_pengguna){
      $this->load->view('content/dashboard/parent');
	    }else{
      $this->load->view('content/login');
	    }
      $this->load->view('layout/footer');
   }
}
