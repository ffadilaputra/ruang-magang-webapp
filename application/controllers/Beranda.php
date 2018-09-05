<?php

class Beranda extends MY_Controller {

    public function __construct(){
      parent::__construct();
    }

    public function index(){
        $data['user'] = $this->session->userdata('logged_in');
        $this->view('beranda.main',$data);
      }
}
