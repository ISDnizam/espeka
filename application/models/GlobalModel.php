
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GlobalModel extends CI_Model{


   public function get_data($table, $where=false){
      $this->db->select('*');
      $this->db->from($table);
      if($where){
      $this->db->where($where);
      }
      $data = $this->db->get();
      return $data;
   }

   public function get_rangking($id_karyawan=false, $id_kriteria=false){
      $this->db->select('*');
      $this->db->from('rangking');
      $this->db->join('karyawan', 'karyawan.id_karyawan=rangking.id_karyawan');
      $this->db->join('kriteria', 'kriteria.id_kriteria=rangking.id_kriteria');
      if($id_karyawan){
      $this->db->where('rangking.id_karyawan', $id_karyawan);
      }
      if($id_kriteria){
      $this->db->where('rangking.id_kriteria', $id_kriteria);
      }
      $data = $this->db->get();
      return $data;
   }

}
?>