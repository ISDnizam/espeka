<?php

if (!function_exists('normalisasi')) {
  function normalisasi($id_karyawan, $id_kriteria, $nilai_normalisasi, $bobot_normalisasi){
	$CI = & get_instance();
		$where['id_karyawan']= $id_karyawan;
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
		        $query=$CI->db->query("SELECT max(nilai_rangking) as nilai_max FROM rangking WHERE id_kriteria=".$id_kriteria."")->row();
				return $query;
			}
	}

	if (!function_exists('get_min')) {
		function get_min($id_kriteria){
				$CI = & get_instance();
		        $query=$CI->db->query("SELECT min(nilai_rangking)  as nilai_min FROM rangking WHERE id_kriteria=".$id_kriteria."")->row();
				return $query;
			}
	}

	if (!function_exists('read_hasil_kandidat')) {
		function read_hasil_kandidat($id_kandidat){
				$CI = & get_instance();
		        $query=$CI->db->query("SELECT sum(bobot_normalisasi) as bobot_normalisasi FROM rangking WHERE id_kandidat=".$id_kandidat."")->row();
				return $query;
			}
	}
	if (!function_exists('set_hasil_kandidat')) {
		function set_hasil_kandidat($id_kandidat,$hasil_kandidat){
				$CI = & get_instance();
				$kandidat['hasil_kandidat'] = $hasil_kandidat;
        		$CI->db->where('id_kandidat', $id_kandidat)->update('kandidat', $kandidat);
				return true;
			}
	}
?>