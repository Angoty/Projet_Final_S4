<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
	
     public function index(){
        $this->load->view('pages/inscription');
     }
    public function save(){
        $this->load->model('Inscription_models');
        if($this->input->post()){
            $nom= $this->input->post('nom');
            $prenom= $this->input->post('prenom');
            $email= $this->input->post('email');
            $mdp= $this->input->post('mdp');

            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png|pdf|docx|xlsx';
            $config['max_size'] = '100000000';
            $this->load->library('upload', $config);
            

            if($this->upload->do_upload('file')) {
                $upload_data = $this->upload->data();
                $this->Inscription_models->insert_utilisateurs($nom, $prenom, $email, $mdp, $upload_data['file_name']);
                $this->load->view('pages/login');
            } else {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }
        }else {
            echo 'erreur';
        }
    }

}
