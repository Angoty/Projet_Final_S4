<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
	
	public function index(){
        redirect('Code/');
    }

    public function insert()
    {
        $this->load->model('Utilisateur_models'); 
        $utilisateur = $_SESSION['idUser'];
        $genre = $this->input->post('genre');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');
        $choix = $this->input->post('choix');
        $this->Utilisateur_models->insert_informations($utilisateur, $genre, $taille, $poids, $choix);
        $result['data']=$this->Utilisateur_models->getGenres();
        $this->load->view('pages/ajouter_informations', $result);
    }

    public function getGenre(){
        $this->load->model('Utilisateur_models');
        $result['data']=$this->Utilisateur_models->getGenres();
        $this->load->view('pages/ajout_information', $result);
    }

    public function quit(){
        $this->session->unset_userdata('idUser');
        $this->load->view('pages/login_client');
    }

    public function IMC() {
		$this->load->view('pages/imc.php');
	}

    public function insert_information(){
        $this->load->view('pages/ajouter_informations');
    }
}
?>
