<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	 public function quit(){
        $this->session->unset_userdata('idAdmin');
        $this->load->view('pages/login');
    }
}
?>
