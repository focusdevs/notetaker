<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Controller {

	public function add($note,$owner,$client)
	{
		$this->load->model("notes");
		if($this->notes->addNote($note,$owner,$client)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function delete($id)
	{
		$this->load->model("notes");
		$this->notes->deleteNote($id);
	}
}

/* End of file Note.php */
/* Location: ./application/controllers/Note.php */