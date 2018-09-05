<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaju extends MY_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Dinas_model');
        $this->load->model('Pengaju_model');
        $this->load->model('Pengajuan_model');
        $this->load->model('Subdinas_model');
        $this->authenticate();
      }

      public function dashboard(){
        $data['user'] = $this->session->userdata('logged_in');
        $this->view('user.dashboard.main', $data);
      }

      public function create(){
        $data['dinas'] = Dinas_model::all();
        $data['user']  = $this->session->userdata('logged_in');
        $data['sub']   = Subdinas_model::all();
        $this->view('user.pengaju.create',$data);
      }

      public function store(){
        // $this->validate($this->input->post(), [
        //   'asal_instansi' => 'required|string',
        //   'jml_pengaju' => 'required|string',
        // ]);
        Pengaju_model::create($this->input->post());
        redirect('pengaju');
      }


}
