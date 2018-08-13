<?php

class User extends MY_Controller {

    public function index(){
        $this->view('user.dashboard.main');
    }

}
