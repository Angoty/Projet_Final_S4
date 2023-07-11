<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_models extends CI_Model
{
    
    public function getListeCodeInvalide(){
        $sql="SELECT * FROM Code WHERE etat=0";
        $query=$this->db->query($sql);
        $result=$query->result_array();
        return $result;   
             
    }
    public function insertPostValidation($numero, $idUser, $etat){
        $sql="insert into PostValidation values (%s, %d, %d)";
        $sql= sprintf($sql, $this->db->escape($numero), $idUser, $etat);
        $this->db->query($sql);
    }

    public function getCodePostValide(){
        $sql="SELECT * FROM PostValidation";
        $query=$this->db->query($sql);
        $result=$query->result_array();
        return $result;   
             
    }

}