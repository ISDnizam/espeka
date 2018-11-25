
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

   public function get_rangking($id_kandidat=false, $id_kriteria=false){
      $this->db->select('*');
      $this->db->from('rangking');
      $this->db->join('kandidat', 'kandidat.id_kandidat=rangking.id_kandidat');
      $this->db->join('kriteria', 'kriteria.id_kriteria=rangking.id_kriteria');
      if($id_kandidat){
      $this->db->where('rangking.id_kandidat', $id_kandidat);
      }
      if($id_kriteria){
      $this->db->where('rangking.id_kriteria', $id_kriteria);
      }
      $data = $this->db->get();
      return $data;
   }

}
?>