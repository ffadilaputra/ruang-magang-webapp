<?php

class Auth extends MY_Controller {

  public function __construct()
{
    parent::__construct();
    $this->load->model('Ususer_model');
  }

  public function index(){
    $this->redirectIfAuthenticated('user','/user');
    $this->view('auth.login.index');
  }

  public function authenticateUser($user){
      if(!is_null($user)){
        $this->session->set_userdata('user',$user);
        redirect(base_url());
      }else{
        $validation = $this->validator->make([],[]);
        $validation->errors()->add('password','Password invalid');

        $this->session->set_flashdata('errors',$validation->errors());
        redirect('auth');
      }
  }

  public function getUser(){
      return Ususer_model::where([
         'nama' => $this->input->post('nama'),
         'password' => md5($this->input->post('password')),
      ])->first();
  }

  public function process(){

    $this->validate($this->input->post(), [
      'nama' => 'required|string|',
      'password' => 'required|string|min:6'
    ]);
    $user = $this->getUser();
    $this->authenticateUser($user);

  }

  public function logout(){
    $this->auth('user','auth');
    $this->session->unset_userdata('user');
    redirect('beranda');
  }

}

?>
