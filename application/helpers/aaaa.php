<?php

if (!function_exists('normalisasi')) {
  function normalisasi(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nilai_normalisasi = :nn2,
					bobot_normalisasi = :nn3
				WHERE
					id_kandidat = :ia 
				AND
					id_kriteria = :ik";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nn2', $this->nn2);
		$stmt->bindParam(':nn3', $this->nn3);
		$stmt->bindParam(':ia', $this->ia);
		$stmt->bindParam(':ik', $this->ik);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>