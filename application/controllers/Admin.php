<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	

	public function quit() {
		$this->session->unset_userdata('idAdmin');
		$this->load->view('pages/login');
	}

	public function list_proposition() {
		$this->load->model('Listproposition_models');
		$data['propositions'] = $this->Listproposition_models->show_proposition();
		$this->load->view('pages/listproposition', $data);
	}
    
    public function list_sport() {
		$this->load->model('Listproposition_models');
		$data['sports'] = $this->Listproposition_models->show_sport();
		$this->load->view('pages/listesport', $data);
	}
    public function insert_regime()
    {
        $this->load->model('Listproposition_models');
        
        // Récupérer les valeurs du formulaire
        $nomregime = $this->input->post('nomregime');
        $prix = $this->input->post('prix');
        
        // Appeler la méthode du modèle pour insérer les données
        $this->Listproposition_models->insert_regime($nomregime, $prix);
        
        $idregime = $this->Listproposition_models->get_max_indice();
        
        $data = array(
            'idregime' => $idregime,
            'idplat' => NULL,
            'idjour' => NULL,
            'idpoids' => NULL,
            'idsport' => NULL
        );
        
        // Insérer la nouvelle ligne dans la table proposition
        $this->db->insert('proposition', $data);

        
        // Rediriger vers une autre page ou afficher un message de succès
        $this->load->view('pages/accueilAdmin');
    }
    public function detail_proposition($idregime)
    {
        $this->load->model('Listproposition_models');
        $data['details'] = $this->Listproposition_models->detail_proposition($idregime);
        $data['plats'] = $this->Listproposition_models->get_all_plats();
        $data['idregime'] = $idregime;
        $this->load->view('pages/detailproposition', $data);
    }
    public function add_plat()
    { 
        $this->load->view('pages/addplat');
    }  
    
    public function addregime()
    { 

    $this->load->view('pages/addregime');

    }
    public function create_proposition()
    {
            $this->load->model('Listproposition_models');
    
            // Récupérer les données pour les listes déroulantes
            $data['regimes'] = $this->Listproposition_models->get_all_regimes();
            $data['plats'] = $this->Listproposition_models->get_all_plats();
            $data['jours'] = $this->Listproposition_models->get_all_jours();
            $data['poids'] = $this->Listproposition_models->get_all_poids();
            $data['sports'] = $this->Listproposition_models->get_all_sports();
    
            $this->load->view('pages/createregime', $data);
    }
    
    public function modif_sport($idsport)
    {
        $this->load->model('Listproposition_models');
        $data['sport'] = $this->Listproposition_models->get_sport($idsport);
        $this->load->view('pages/modifsport', $data);
    }
    
    public function modif_proposition($idregime)
    {
        $this->load->model('Listproposition_models');

        // Récupérer les données de la proposition à modifier
        $data['proposition'] = $this->Listproposition_models->get_proposition_by_regime($idregime);
    
        // Récupérer les données pour les listes déroulantes
        $data['plats'] = $this->Listproposition_models->get_all_plats();
        $data['jours'] = $this->Listproposition_models->get_all_jours();
        $data['poids'] = $this->Listproposition_models->get_all_poids();
        $data['sport'] = $this->Listproposition_models->get_all_sports();
    
        // Ajouter la variable $idregime aux données à transmettre à la vue
        $data['idregime'] = $idregime;
        
        $this->load->view('pages/modifproposition', $data);
    }
    
    public function update_proposition()
        {
            $this->load->model('Listproposition_models'); // Charger le modèle
            $idregime = $this->input->post('idregime');
            // Récupérer les autres données soumises par le formulaire
            $idplat = $this->input->post('idplat');
            $idjour = $this->input->post('idjour');
            $idpoids = $this->input->post('idpoids');
            $idsport = $this->input->post('idsport');
    
            // Appeler la méthode du modèle pour mettre à jour la proposition
            $this->Listproposition_models->modifier_proposition($idplat, $idjour, $idpoids, $idsport, $idregime);
    
            // Rediriger vers une autre page ou afficher un message de succès
            $this->load->view('pages/accueilAdmin');
        }

    

    public function update_sport($idsport)
    {
        $this->load->model('Listproposition_models');
        $nomsport = $this->input->post('nomsport');
        $idchoix = $this->input->post('idchoix');

        $this->Listproposition_models->modifier_sport($idsport, $nomsport, $idchoix);
        $this->load->view('pages/accueilAdmin');
    }

   
    

    public function delete_regime($idregime)
    {
        $this->load->model('Listproposition_models');
        $this->Listproposition_models->delete_regime($idregime);
        $this->load->view('pages/accueilAdmin');
    }




    public function delete_sport($idsport)
    {
        $this->load->model('Listproposition_models');
        $this->Listproposition_models->delete_sport($idsport);
        $this->load->view('pages/accueilAdmin');
    }


    public function ajout_sport()
    { 
        $this->load->view('pages/ajoutsport');
    }
    public function insert_plat()
    {
        $this->load->model('Listproposition_models');
        
        // Récupérer les valeurs du formulaire
        $nomplat = $this->input->post('nomplat');
        $description = $this->input->post('description');
        $idchoix = $this->input->post('idchoix');
        $idmoment = $this->input->post('idmoment');
        
        // Appeler la méthode du modèle pour insérer les données
        $this->Listproposition_models->insert_plat($nomplat, $description, $idchoix, $idmoment);
        
        // Rediriger vers une autre page ou afficher un message de succès
        $this->load->view('pages/accueilAdmin');
    }
    public function insert_sport()
    {
        $this->load->model('Listproposition_models');
        
        // Récupérer les valeurs du formulaire
        $nomsport = $this->input->post('nomsport');
        $idchoix = $this->input->post('idchoix');
        
        // Appeler la méthode du modèle pour insérer les données
        $this->Listproposition_models->insert_sport($nomsport, $idchoix);
        
        // Rediriger vers une autre page ou afficher un message de succès
        $this->load->view('pages/listesport');
    }
    
    
      
    public function update_propositionJ1()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =1;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
            public function update_propositionJ2()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =2;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
            public function update_propositionJ3()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =3;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
    
            public function update_propositionJ4()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =4;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
    
            public function update_propositionJ5()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =5;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
    
            public function update_propositionJ6()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =6;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
    
            public function update_propositionJ7()
            {
                $this->load->model('Listproposition_models'); // Charger le modèle
            
                $idregime = $this->uri->segment(4); // Récupérer le 4e segment de l'URL (index 4)
                $idplat = $this->input->post('idplat');
                $idjour =7;
            
                // Appeler la méthode du modèle pour mettre à jour la proposition
                $this->Listproposition_models->modifier_propositionJ1($idplat, $idregime, $idjour);
            
                // Rediriger vers une autre page ou afficher un message de succès
                $this->load->view('pages/accueilAdmin');
            }
    

    
}
?>
