<?php

class Berkas extends MY_Controller {

      public function __construct(){
        parent::__construct();
        $this->authenticateUser();
      }

      public function index(){
          $data['user'] = $this->session->userdata('logged_in');
          $this->view('user.pengajuan.index',$data);
      }

      public function submit(){
          $this->load->model('Pengajuan_model');
          Pengajuan_model::create($this->input->post());
          redirect('pengajuan');
      }

}
?>
