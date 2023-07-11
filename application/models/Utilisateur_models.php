<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_models extends CI_Model
{
      
    public function insert_informations($utilisateur, $genre, $taille, $poids, $choix){
        $sql = "INSERT INTO informations (idUtilisateur, idgenre, taille, poids, idchoix) VALUES (%d, %s, %d, %d, %d)";
        $sql = sprintf($sql, $utilisateur, $this->db->escape($genre), $taille, $poids, $choix);
        $this->db->query($sql);
    }

    public function getGenres(){
        $sql="SELECT * FROM Genres";
        $query=$this->db->query($sql);
        $result=$query->row_array();
        return $result;
    }
}

?>