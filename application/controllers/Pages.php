<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller{
   function __construct(){
      parent::__construct();
      $this->id_pengguna = $this->session->userdata('id_pengguna');
      $this->load->helper('global');
   }


   // MODULE LOGIN START
      function login(){
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $username = $this->input->post('username');
      $password = $this->input->post('password');
         if($username){
         $where = array(
                 'username' => $username,
                 'password' => md5($password)
         );
         $check_pengguna = $this->GlobalModel->get_data('pengguna', $where)->row();
           if ($check_pengguna){
            $data_session = array(
                    'id_pengguna' => $check_pengguna->id_pengguna,
                    'email' => $check_pengguna->email,
            );
            $this->session->set_userdata($data_session);
            redirect('');
            }else{
             $this->session->set_flashdata('message_error', 'Username atau Password Salah');
             redirect('');
            }
         }
      }



  // MODULE KRITERIA START
      function nilai(){
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['title'] = "Data Nilai Preferensi";
      $data['list'] = $this->GlobalModel->get_data('nilai')->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/nilai/parent');
      $this->load->view('layout/footer');
      }

      function tambah_nilai(){
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['title'] = "Tambah Nilai Preferensi";
      $nilai = $this->input->post('nilai');
      if($nilai){
         $this->db->insert('nilai', $nilai);
         redirect('pages/nilai');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/nilai/form_nilai');
      $this->load->view('layout/footer');
      }

      function edit_nilai($id_nilai){
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['title'] = "Edit nilai Preferensi";
      $data['edit'] = $this->GlobalModel->get_data('nilai',['id_nilai' => $id_nilai])->row();
      $nilai = $this->input->post('nilai');
      if($nilai){
         $this->db->where('id_nilai', $id_nilai)->update('nilai', $nilai);
         redirect('pages/nilai');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/nilai/form_nilai');
      $this->load->view('layout/footer');
   }

    function hapus_nilai($id_nilai){
      $data['title'] = "Hapus nilai";
      if($id_nilai){
      $this->db->where('id_nilai', $id_nilai)->delete('nilai');
      redirect('pages/nilai');
      }
   }
   // MODULE NILAI END





   // MODULE KRITERIA START
   	function kriteria(){
      $data['title'] = "Data Kriteria";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['list'] = $this->GlobalModel->get_data('kriteria')->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/parent');
      $this->load->view('layout/footer');
   	}

    function tambah_kriteria(){
      $data['title'] = "Tambah Kriteria";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $kriteria = $this->input->post('kriteria');
      if($kriteria){
         $this->db->insert('kriteria', $kriteria);
         redirect('pages/kriteria');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/form_kriteria');
      $this->load->view('layout/footer');
   }

    function edit_kriteria($id_kriteria){
      $data['title'] = "Edit Kriteria";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['edit'] = $this->GlobalModel->get_data('kriteria', ['id_kriteria' => $id_kriteria])->row();
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $kriteria = $this->input->post('kriteria');
      if($kriteria){
         $this->db->where('id_kriteria', $id_kriteria)->update('kriteria', $kriteria);
         redirect('pages/kriteria');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/form_kriteria');
      $this->load->view('layout/footer');
   }

    function hapus_kriteria($id_kriteria){
      $data['title'] = "Hapus Kriteria";
      if($id_kriteria){
      $this->db->where('id_kriteria', $id_kriteria)->delete('kriteria');
      redirect('pages/kriteria');
	  }
   }
   // MODULE KRITERIA END




   function karyawan(){
      $data['title'] = "Data karyawan";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['list'] = $this->GlobalModel->get_data('karyawan')->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/karyawan/parent');
      $this->load->view('layout/footer');
      }

    function tambah_karyawan(){
      $data['title'] = "Tambah karyawan";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $karyawan = $this->input->post('karyawan');
      if($karyawan){
         $this->db->insert('karyawan', $karyawan);
         redirect('pages/karyawan');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/karyawan/form_karyawan');
      $this->load->view('layout/footer');
   }

    function edit_karyawan($id_karyawan){
      $data['title'] = "Edit karyawan";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['edit'] = $this->GlobalModel->get_data('karyawan', ['id_karyawan' => $id_karyawan])->row();
      $karyawan = $this->input->post('karyawan');
      if($karyawan){
         $this->db->where('id_karyawan', $id_karyawan)->update('karyawan', $karyawan);
         redirect('pages/karyawan');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/karyawan/form_karyawan');
      $this->load->view('layout/footer');
   }

    function hapus_karyawan($id_karyawan){
      $data['title'] = "Hapus karyawan";
      if($id_karyawan){
      $this->db->where('id_karyawan', $id_karyawan)->delete('karyawan');
      redirect('pages/karyawan');
     }
   }




      function rangking(){
      $data['title'] = "rangking";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $data['list_kriteria'] = $this->GlobalModel->get_data('kriteria')->result();
      $data['list_karyawan'] = $this->GlobalModel->get_data('karyawan')->result();
      $data['list_rangking'] = $this->GlobalModel->get_rangking()->result();
      
     
      foreach ($data['list_karyawan'] as $karyawan) {
         foreach ($data['list_kriteria'] as $kriteria) {
         $data['rangking'][$karyawan->id_karyawan][$kriteria->id_kriteria] = $this->GlobalModel->get_rangking($karyawan->id_karyawan, $kriteria->id_kriteria)->row();
         }
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/rangking/parent');
      $this->load->view('layout/footer');
      }




    function tambah_rangking(){
      $data['title'] = "Tambah rangking";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $data['list_kriteria'] = $this->GlobalModel->get_data('kriteria')->result();
      $data['list_karyawan'] = $this->GlobalModel->get_data('karyawan')->result();


      $rangking = $this->input->post('rangking');
      if($rangking){
         $check_data = $this->GlobalModel->get_rangking($rangking['id_karyawan'], $rangking['id_kriteria'])->result();
         if($check_data){
         $this->db->where(array('id_karyawan' => $rangking['id_karyawan'],'id_kriteria'=>$rangking['id_kriteria']))->update('rangking', $rangking);
         }else{
         $this->db->insert('rangking', $rangking);
         }
         redirect('pages/rangking');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/rangking/form_rangking');
      $this->load->view('layout/footer');
   }

    function edit_rangking(){
      $data['title'] = "Edit rangking";
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $data['list_kriteria'] = $this->GlobalModel->get_data('kriteria')->result();
      $data['list_karyawan'] = $this->GlobalModel->get_data('karyawan')->result();

      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $id_karyawan='';
      $id_kriteria='';
      if(!empty($_GET['id_karyawan'])){
         $id_karyawan = $_GET['id_karyawan'];
      }
      if(!empty($_GET['id_kriteria'])){
         $id_kriteria = $_GET['id_kriteria'];
      }

      $data['edit'] = $this->GlobalModel->get_rangking($id_karyawan, $id_kriteria)->row();
      $rangking = $this->input->post('rangking');
      if($rangking){
         $this->db->where(array('id_karyawan' => $id_karyawan,'id_kriteria'=>$id_kriteria))->update('rangking', $rangking);
         redirect('pages/rangking');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/rangking/form_rangking');
      $this->load->view('layout/footer');
   }

    function hapus_rangking(){
      $id_karyawan='';
      $id_kriteria='';
      if(!empty($_GET['id_karyawan'])){
         $id_karyawan = $_GET['id_karyawan'];
      }
      if(!empty($_GET['id_kriteria'])){
         $id_kriteria = $_GET['id_kriteria'];
      }
      $data['title'] = "Hapus rangking";
      if($id_karyawan!='' and $id_kriteria!=''){
      $this->db->where(array('id_karyawan' => $id_karyawan,'id_kriteria'=>$id_kriteria))->delete('rangking');
      redirect('pages/rangking');
     }
   }





   function laporan(){
      $data['title'] = "Laporan";
      if($this->id_pengguna){
         $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $data['list_kriteria'] = $this->GlobalModel->get_data('kriteria')->result();
      $data['list_karyawan'] = $this->GlobalModel->get_data('karyawan')->result();
      $data['list_rangking'] = $this->GlobalModel->get_rangking()->result();
      
     
      foreach ($data['list_karyawan'] as $karyawan) {
         foreach ($data['list_kriteria'] as $kriteria) {
         $data['rangking'][$karyawan->id_karyawan][$kriteria->id_kriteria] = $this->GlobalModel->get_rangking($karyawan->id_karyawan, $kriteria->id_kriteria)->row();
         }
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/laporan/parent');
      $this->load->view('layout/footer');
   }


   public function logout(){
   $this->session->unset_userdata('status');
   $this->session->sess_destroy();
   redirect('');
   }

}
