<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    // Show login form
    public function index() {
        $this->redirectIfAuthenticated('user');
        $this->view('auth.login.index');
    }

    // Login process
    public function process() {
        $this->redirectIfAuthenticated('user');
        $this->validate($this->input->post(), [
            'nama' => 'required',
            'password' => 'required|string|min:6'
        ]);
        $user = $this->getUser();
        $this->authenticateUser($user);
    }

    // Get user to authenticate
    public function getUser() {
        return Ususer_model::where([
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password'))
        ])->first();
    }

    // Authenticate user
    public function authenticateUser($user) {
        if (!is_null($user)) {
            $this->session->set_userdata('user', $user);
            redirect(base_url());
        } else {
            $validation = $this->validator->make([], []);
            $validation->errors()->add('password', 'the password is invalid');
            $this->session->set_flashdata('errors', $validation->errors());
            //$this->session->set_flashdata('old', $this->input->post());
            redirect(base_url('Auth'));
        }
    }

    // Logout Process
    public function logoutProcess() {
        $this->auth('user', 'login');
        $this->session->unset_userdata('user');
        redirect(base_url());
    }
}
