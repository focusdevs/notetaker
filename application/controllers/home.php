<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index($id)
	{
		$this->load->model("notes");
		$data = array();
		$data['notes'] = $this->notes->getNotes($id);
		$data['clients'] = $this->notes->getClients();
		$this->load->view('header',$data);
		$this->load->view('note',$data);
		$this->load->view('footer');
	}
	
	public function clients() {
		$data = array();
		$data['clients'] = $this->notes->getClients();
		$this->load->view('header',$data);
		$this->load->view('addClient',$data);
		$this->load->view('footer');
	}
	
	public function client() {
		$this->load->view('header',$data);
		$this->load->view('note',$data);
		$this->load->view('footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */