<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

    public function index(){
        $this->load->model('Code_models');
        $result['data']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/code_utilisateur', $result);
    }

    public function PostValidation(){
        $idUser=$_SESSION['idUser'];
        $numero = $this->input->post('numero');
        $result['validation']= $this->Code_models->insertPostValidation($numero, $idUser, 5);
        $result['data']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/code_utilisateur', $result);
    }
}

