<?php

class Login extends MY_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
  }

  public function index(){
      $this->redirectIfAuthenticated('logged_in');
      $this->view('auth.login.index');
  }

  public function process(){
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

    if ($this->form_validation->run() == FALSE) {
			    $this->view('auth.login.index');
		}else{
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
          redirect('pengaju/dashboard');
      }
    }
  }

  public function cekDb($password){
		$user = $this->input->post('nama');
		$result = $this->Login_model->login($user,$password);
		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id_user' => $row->id_user,
					'nama' => $row->nama,
					'email' => $row->email,
				 );
        $this->session->set_userdata('logged_in',$sess);
			}
			return true;
		}else{
      $validation = $this->validator->make([], []);
      $validation->errors()->add('password', 'the password is invalid');
      $this->session->set_flashdata('errors', $validation->errors());
			//$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
  }

  public function logoutProcess() {
    $this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
}

}

?>
