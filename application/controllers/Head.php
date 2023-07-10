<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller {

    public function quit(){
        $this->session->unset_userdata('idUser');
        $this->load->view('pages/login');
    }

}

