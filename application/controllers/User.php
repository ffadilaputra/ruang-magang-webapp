<?php

class User extends MY_Controller {

    public function index(){
      $data['user'] = $this->session->userdata('logged_in');
      $this->view('user.dashboard.main',$data);
    }

    public function profile(){
      $this->authenticateUser();
      $this->load->model('Ususer_model');
      $data['user'] = $this->session->userdata('logged_in');
      $data['profil'] = Ususer_model::find($data['user']['id_user']);
      $this->view('user.profil.index',$data);
    }

    public function update($id){
      $this->load->model('Ususer_model');
      $data['user'] = $this->session->userdata('logged_in');
      $_POST['password'] = md5($_POST['password']);
      Ususer_model::find($id)->update($this->input->post());
      redirect('user/index');
    }

}
