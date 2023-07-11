<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view('pages/login_client');
    }

	public function check_login(){
        $email= $this->input->get('email');
		$mdp= $this->input->get('mdp');
        $this->load->model('Login_models');
        $result= $this->Login_models->check_login($email, $mdp);
        if($result==1){
            $idUser=$_SESSION['idUser'];            
            $this->load->view('pages/client_page');
        }else{
            $this->load->view('pages/login');
        }
    }

    public function check_logAdmin(){
        $email= $this->input->get('email');
		$mdp= $this->input->get('mdp');
        $this->load->model('Login_models');
        $this->load->model('Code_models');
        $result= $this->Login_models->check_loginAdmin($email, $mdp);
        if($result==1){
            $idUser=$_SESSION['idAdmin'];
            $values['codes']=$this->Code_models->getListeCodeInvalide();
            $this->load->view('pages/admin_page', $values);
        }else{
            $this->load->model('Login_models');
            $result['admin']= $this->Login_models->getAdmin();
            $this->load->view('pages/log_admin',$result);
        }   
    }

    public function show_Admin(){
        $this->load->model('Login_models');
        $this->load->model('Code_models');
        $result['admin']= $this->Login_models->getAdmin();
        $data['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/login_admin', $result);
    }

}

