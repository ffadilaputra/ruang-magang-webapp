<?php

class Berkas extends MY_Controller {

      public function __construct(){
        parent::__construct();
        $this->load->model('Pengajuan_model');
      }

      public function index(){
          $this->authenticateUser();
          $data['user'] = $this->session->userdata('logged_in');
          $cek = Pengajuan_model::where('id_pengaju',$data['user']['id_user'])->first();

          if($cek == TRUE ){
            // echo 'Sudah Submit Berkas';
            $data['status'] = Pengajuan_model::where('id_pengaju',$data['user']['id_user'])->first();
            $this->view('user.pengaju.status',$data);
          }else{
            $this->view('user.pengajuan.index',$data);
          }

          //$this->view('user.pengajuan.index',$data);
      }

      public function submit(){
          $this->load->model('Pengajuan_model');
          Pengajuan_model::create($this->input->post());
          redirect('pengaju');
      }

}
?>
