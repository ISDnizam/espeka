<?php

if (!function_exists('normalisasi')) {
  function normalisasi($id_kandidat, $id_kriteria, $nilai_normalisasi, $bobot_normalisasi){
	$CI = & get_instance();
		$where['id_kandidat']= $id_kandidat;
		$where['id_kriteria']= $id_kriteria;
		$rangking['nilai_normalisasi']= $nilai_normalisasi;
		$rangking['bobot_normalisasi']= $bobot_normalisasi;
        $CI->db->where($where)->update('rangking', $rangking);
		return true;
	}
}

	if (!function_exists('get_max')) {
		function get_max($id_kriteria){
				$CI = & get_instance();
		        $venue=$CI->db->query("SELECT max(nilai_rangking) as nilai_max FROM rangking WHERE id_kriteria=".$id_kriteria."")->row();
				return $venue;
			}
	}

		if (!function_exists('get_min')) {
		function get_min($id_kriteria){
				$CI = & get_instance();
		        $venue=$CI->db->query("SELECT min(nilai_rangking)  as nilai_min FROM rangking WHERE id_kriteria=".$id_kriteria."")->row();
				return $venue;
			}
	}

?>