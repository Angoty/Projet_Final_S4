<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
	
	public function list_proposition() {
		$this->load->model('Regime_models');
		$data['propositions'] = $this->Regime_models->show_proposition();
		$this->load->view('pages/liste_proposition', $data);
	}
    public function detail_proposition($idregime)
    {
        $this->load->model('Regime_models');
        $data['details'] = $this->Regime_models->detail_proposition($idregime);
        $data['plats'] = $this->Regime_models->get_all_plats();
        $data['idregime'] = $idregime;
        $this->load->view('pages/details_proposition', $data);
    }
    public function update_propositionJ1(){
        $this->load->model('Regime_models');
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =1;
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    public function update_propositionJ2(){
        $this->load->model('Regime_models');
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =2;            
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);   
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    public function update_propositionJ3(){
        $this->load->model('Regime_models');
    
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =3;
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    
    public function update_propositionJ4(){
        $this->load->model('Regime_models');
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =4;
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    
    public function update_propositionJ5(){
        $this->load->model('Regime_models');
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =5;
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    
    public function update_propositionJ6(){
        $this->load->model('Regime_models'); 
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =6;
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    
    public function update_propositionJ7(){
        $this->load->model('Regime_models');
        $idregime = $this->uri->segment(4);
        $idplat = $this->input->post('idplat');
        $idjour =7;
        $this->Regime_models->modifier_propositionJ1($idplat, $idregime, $idjour);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }

    public function add_plat(){ 
        $this->load->view('pages/ajouter_plat');
    }

    public function insert_plat()
    {
        $this->load->model('Regime_models');
        $nomplat = $this->input->post('nomplat');
        $description = $this->input->post('description');
        $idchoix = $this->input->post('idchoix');
        $idmoment = $this->input->post('idmoment');
        $this->Regime_models->insert_plat($nomplat, $description, $idchoix, $idmoment);        
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }

    public function list_sport() {
		$this->load->model('Regime_models');
		$data['sports'] = $this->Regime_models->show_sport();
		$this->load->view('pages/liste_sport', $data);
	}

    public function modif_sport($idsport){
        $this->load->model('Regime_models');
        $data['sport'] = $this->Regime_models->get_sport($idsport);
        $this->load->view('pages/modifier_sport', $data);
    }

    public function ajout_sport(){ 
        $this->load->view('pages/ajouter_sport');
    }

    public function update_sport($idsport){
        $this->load->model('Regime_models');
        $nomsport = $this->input->post('nomsport');
        $idchoix = $this->input->post('idchoix');
        $this->Regime_models->modifier_sport($idsport, $nomsport, $idchoix);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }

    public function modif_proposition($idregime)
    {
        $this->load->model('Regime_models');
        $data['proposition'] = $this->Regime_models->get_proposition_by_regime($idregime);
        $data['plats'] = $this->Regime_models->get_all_plats();
        $data['jours'] = $this->Regime_models->get_all_jours();
        $data['poids'] = $this->Regime_models->get_all_poids();
        $data['sport'] = $this->Regime_models->get_all_sports();
        $data['idregime'] = $idregime;        
        $this->load->view('pages/modifier_proposition', $data);
    }

    public function update_proposition(){
        $this->load->model('Regime_models');
        $idregime = $this->input->post('idregime');
        $idplat = $this->input->post('idplat');
        $idjour = $this->input->post('idjour');
        $idpoids = $this->input->post('idpoids');
        $idsport = $this->input->post('idsport');    
        $this->Regime_models->modifier_proposition($idplat, $idjour, $idpoids, $idsport, $idregime);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }
    public function addregime(){ 
        $this->load->view('pages/ajouter_regime');
    }

    public function insert_regime()
    {
        $this->load->model('Regime_models');
        $nomregime = $this->input->post('nomregime');
        $prix = $this->input->post('prix');
        $this->Regime_models->insert_regime($nomregime, $prix);        
        $idregime = $this->Regime_models->get_max_indice();
        $data = array(
            'idregime' => $idregime,
            'idplat' => NULL,
            'idjour' => NULL
        );
        $this->db->insert('proposition', $data);
        $result['codes']=$this->Code_models->getListeCodeInvalide();
        $this->load->view('pages/admin_page', $result);
    }

    public function insert_sport()
    {
        $this->load->model('Regime_models');
        $nomsport = $this->input->post('nomsport');
        $idchoix = $this->input->post('idchoix');
        $this->Regime_models->insert_sport($nomsport, $idchoix);
        $data['sports'] = $this->Regime_models->show_sport();
        $this->load->view('pages/liste_sport', $data);
    }
    
    public function delete_sport($idsport)
    {
        $this->load->model('Regime_models');
        $this->Regime_models->delete_sport($idsport);
        $this->load->view('pages/accueilAdmin');
    }

    public function delete_regime($idregime)
    {
        $this->load->model('Regime_models');
        $this->Regime_models->delete_regime($idregime);
        $this->load->view('pages/accueilAdmin');
    }
    
}
?>
