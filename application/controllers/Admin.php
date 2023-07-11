<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function quit(){
        $this->load->model('Login_models');
        $this->session->unset_userdata('idAdmin');
        $result['admin']= $this->Login_models->getAdmin();
        $this->load->view('pages/login_admin', $result);
    }
}
?>
