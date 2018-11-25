<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
   function __construct(){
      parent::__construct();
      $this->id_pengguna = $this->session->userdata('id_pengguna');
   }

    function index(){
      $data['title'] = "Dashboard";
      $data['list_nilai'] = $this->GlobalModel->get_data('nilai')->result();
      $data['list_kriteria'] = $this->GlobalModel->get_data('kriteria')->result();
      $data['list_kandidat'] = $this->GlobalModel->get_data('kandidat')->result();
      if($this->id_pengguna){
       $data['pengguna'] = $this->GlobalModel->get_data('pengguna', ['id_pengguna' => $this->id_pengguna])->row();
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/dashboard/parent');
      $this->load->view('layout/footer');
    }

   // MODULE KRITERIA START
   	function kriteria(){
      $data['title'] = "Kriteria";
      $data['list'] = $this->GlobalModel->get_kriteria()->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/parent');
      $this->load->view('layout/footer');
   	}

    function tambah_kriteria(){
      $data['title'] = "Tambah Kriteria";
      $kriteria = $this->input->post('kriteria');
      if($kriteria){
         $this->db->insert('tab_kriteria', $kriteria);
         redirect('pages/kriteria');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/form_kriteria');
      $this->load->view('layout/footer');
   }

    function edit_kriteria($id_kriteria){
      $data['title'] = "Edit Kriteria";
      $data['edit'] = $this->GlobalModel->get_kriteria($id_kriteria)->row();
      $kriteria = $this->input->post('kriteria');
      if($kriteria){
         $this->db->where('id_kriteria', $id_kriteria)->update('tab_kriteria', $kriteria);
         redirect('pages/kriteria');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/form_kriteria');
      $this->load->view('layout/footer');
   }

    function hapus_kriteria($id_kriteria){
      $data['title'] = "Hapus Kriteria";
      if($id_kriteria){
      $this->db->where('id_kriteria', $id_kriteria)->delete('tab_kriteria');
      redirect('pages/kriteria');
	  }
      $this->load->view('layout/header', $data);
      $this->load->view('content/kriteria/form_kriteria');
      $this->load->view('layout/footer');
   }
   // MODULE KRITERIA END






     // MODULE ALTERNATIF START
   	function alternatif(){
      $data['title'] = "alternatif";
      $data['list'] = $this->GlobalModel->get_alternatif()->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/alternatif/parent');
      $this->load->view('layout/footer');
   	}

    function tambah_alternatif(){
      $data['title'] = "Tambah alternatif";
      $alternatif = $this->input->post('alternatif');
      if($alternatif){
         $this->db->insert('tab_alternatif', $alternatif);
         redirect('pages/alternatif');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/alternatif/form_alternatif');
      $this->load->view('layout/footer');
   }

    function edit_alternatif($id_alternatif){
      $data['title'] = "Edit alternatif";
      $data['edit'] = $this->GlobalModel->get_alternatif($id_alternatif)->row();
      $alternatif = $this->input->post('alternatif');
      if($alternatif){
         $this->db->where('id_alternatif', $id_alternatif)->update('tab_alternatif', $alternatif);
         redirect('pages/alternatif');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/alternatif/form_alternatif');
      $this->load->view('layout/footer');
   }

    function hapus_alternatif($id_alternatif){
      $data['title'] = "Hapus alternatif";
      if($id_alternatif){
      $this->db->where('id_alternatif', $id_alternatif)->delete('tab_alternatif');
      redirect('pages/alternatif');
	  }
      $this->load->view('layout/header', $data);
      $this->load->view('content/alternatif/form_alternatif');
      $this->load->view('layout/footer');
   }
   // MODULE ALTERNATIF END




    // MODULE poin START
   	function poin(){
      $data['title'] = "poin";
      $data['list'] = $this->GlobalModel->get_poin()->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/poin/parent');
      $this->load->view('layout/footer');
   	}

    function tambah_poin(){
      $data['title'] = "Tambah poin";
      $poin = $this->input->post('poin');
      if($poin){
         $this->db->insert('tab_poin', $poin);
         redirect('pages/poin');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/poin/form_poin');
      $this->load->view('layout/footer');
   }

    function edit_poin($id_poin){
      $data['title'] = "Edit poin";
      $data['edit'] = $this->GlobalModel->get_poin($id_poin)->row();
      $poin = $this->input->post('poin');
      if($poin){
         $this->db->where('id_poin', $id_poin)->update('tab_poin', $poin);
         redirect('pages/poin');
      }
      $this->load->view('layout/header', $data);
      $this->load->view('content/poin/form_poin');
      $this->load->view('layout/footer');
   }

    function hapus_poin($id_poin){
      $data['title'] = "Hapus poin";
      if($id_poin){
      $this->db->where('id_poin', $id_poin)->delete('tab_poin');
      redirect('pages/poin');
	  }
      $this->load->view('layout/header', $data);
      $this->load->view('content/poin/form_poin');
      $this->load->view('layout/footer');
   }
   // MODULE poin END



 	// MODULE NILAI MATRIKS START
   	function nilai_matriks(){
      $data['title'] = "NILAI MATRIKS";
      $data['list_alternatif'] = $this->GlobalModel->get_alternatif()->result();
      $data['list_kriteria'] = $this->GlobalModel->get_kriteria()->result();
      $data['list_poin'] = $this->GlobalModel->get_poin()->result();

      $topsis = $this->input->post('topsis');
      if($topsis){
      	$check_topsis = $this->GlobalModel->get_topsis($topsis['id_alternatif'], $topsis['id_kriteria'])->result();
      	if(empty($check_topsis)){
         	$this->db->insert('tab_topsis', $topsis);
      	}else{
         $this->db->where(array('id_alternatif' =>$topsis['id_alternatif'], 'id_kriteria' => $topsis['id_kriteria']))->update('tab_topsis', $topsis);
      	}
      	redirect('pages/nilai_matriks');
      }
      $data['list_matriks'] = $this->GlobalModel->get_topsis()->result();
      $this->load->view('layout/header', $data);
      $this->load->view('content/matriks/parent');
      $this->load->view('layout/footer');
   	}
   // MODULE NILAI MATRIKS END



   	// MODULE HASIL TOPSIS START
   	function hasil_topsis(){
      $data['title'] = "HASIL TOPSIS";
      $data['list_alternatif'] = $this->GlobalModel->get_alternatif()->result();
      $data['list_kriteria'] = $this->GlobalModel->get_kriteria()->result();
      $data['list_poin'] = $this->GlobalModel->get_poin()->result();

      $topsis = $this->input->post('topsis');
      if($topsis){
      	$check_topsis = $this->GlobalModel->get_topsis($topsis['id_alternatif'], $topsis['id_kriteria'])->result();
      	if(empty($check_topsis)){
         	$this->db->insert('tab_topsis', $topsis);
      	}else{
         $this->db->where(array('id_alternatif' =>$topsis['id_alternatif'], 'id_kriteria' => $topsis['id_kriteria']))->update('tab_topsis', $topsis);
      	}
      }
      $data['list_matriks'] = $this->GlobalModel->get_topsis()->result();
     
     	foreach ($data['list_alternatif'] as $key) {

     		foreach ($data['list_kriteria'] as $row) {
     			$data['topsis'][$key->id_alternatif][$row->id_kriteria] = $this->GlobalModel->get_topsis($key->id_alternatif, $row->id_kriteria)->row();
     			$data['data_topsis'][$row->id_kriteria] = $this->GlobalModel->get_topsis('', $row->id_kriteria)->result();
	     		if($data['topsis'][$key->id_alternatif][$row->id_kriteria]){
			 	$nilai =  $data['topsis'][$key->id_alternatif][$row->id_kriteria]->nilai;
	      		$nilai_kuadrat = $nilai*$nilai; 
	      		$akar_nilai_kuadrat = sqrt($nilai_kuadrat);
	      		}
     		}
     	}
      $this->load->view('layout/header', $data);
      $this->load->view('content/topsis/parent');
      $this->load->view('layout/footer');
   	}
   // MODULE  HASIL TOPSIS  END

}
