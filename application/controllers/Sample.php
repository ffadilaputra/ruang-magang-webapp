<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends MY_Controller {

    public function index() {

		$data['tes'] = 'Halo';

		$this->view('admin.category.index',$data);
	}
}
