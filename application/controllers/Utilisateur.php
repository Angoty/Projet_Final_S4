<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
	
	public function index(){
        redirect('Code/');
    }

    public function insert($genre, $taille, $poids){
        $idUser=$_SESSION['idUser'];
        $genre = $this->input->post('genre');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');
        $this->Utilisateur_models->insertInformation($idUser, $genre, $taille, $poids);
    }

    public function getGenre(){
        $this->load->model('Utilisateur_models');
        $result['data']=$this->Utilisateur_models->getGenres();
        $this->load->view('pages/ajout_information', $result);
    }
}
?>
