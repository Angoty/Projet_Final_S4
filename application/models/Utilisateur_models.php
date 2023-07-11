<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_models extends CI_Model
{
      
    public function insert_informations($utilisateur, $genre,$taille,$poids)
    {
       $sql="insert into informations values (%d, %s, %d, %d)";
       $sql= sprintf($sql, $utilisateur, $this->db->escape($genre), $taille, $poids);
       echo $sql;
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