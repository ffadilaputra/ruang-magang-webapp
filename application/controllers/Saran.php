<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('Saran_model');
  	}

	public function index()
	{
		
	}

	public function create(){
     //validasi form
    // $this->validate($this->input->post(), [
    //   'nama' => 'required|string',
    //   'email' => 'required|string',
    //   'keterangan' => 'required|string',
    // ]);
    //Proses Input
    Saran_model::create($this->input->post());
    redirect('');
  }

}

/* End of file Saran.php */
/* Location: ./application/controllers/Saran.php */