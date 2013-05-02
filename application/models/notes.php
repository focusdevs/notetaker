<?php

class notes extends CI_Model {

	function getNotes($id) {
		$sql = "SELECT * FROM notes WHERE client='$id'";
		$result = $this->db->query($sql);
		return $result->result_Array();
	}
	
	function getNote($id) {
		$sql = "SELECT * FROM notes WHERE id='$id'";
		$result = $this->db->query($sql);
		return $result->result_Array();
	}
	
	function addNote($note,$owner,$client) {
		$sql = "INSERT INTO notes (note,owner,client) VALUES ('$note','$owner','$client')";
		$result = $this->db->query($sql);
		if($result) {
			return true;
		} else {
			return false;
		}
	}
	
	function deleteNote($id) {
		$sql = "DELETE FROM notes WHERE id='$id'";
		$result = $this->db->query($sql);
		if($result) {
			return true;
		} else {
			return false;
		}
	}
	
	function getClients() {
		$sql = "SELECT * FROM clients";
		$result = $this->db->query($sql);
		return $result->result_Array();
	}
	
	function getClient($id) {
		$sql = "SELECT * FROM clients WHERE id='$id'";
		$result = $this->db->query($sql);
		return $result->result_Array();
	}
	
	function addClient($fname,$lname,$contact,$title,$notes,$phone,$email,$domain) {
		$sql = "INSERT INTO clients (firstname,lastname,contact,title,notes,phone,email,domain) VALUES ('$fname','$lname','$contact','$title','$notes','$phone','$email','$domain')";
		$result = $this->db->query($sql);
		if($result) {
			return true;
		} else {
			return false;
		}
	}

}

?>