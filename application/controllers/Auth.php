<?php

class Auth extends MY_Controller {

  public function index(){
    $csrf['csrf'] = array(
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    );
    $this->view('auth.login.index',$csrf);
  }
}

?>
