<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_models extends CI_Model
{
    public function show_proposition(){
        try {
            $sql = "SELECT * FROM regime";
            $query = $this->db->query($sql);
            $all = $query->result_array();
            return $all;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function detail_proposition($idregime){
        try {
            $sql = "SELECT r.nomregime, pl.nomplat, m.intituleM, j.intituleJ, c.intituleP, s.nomsport
            FROM proposition AS p
            JOIN regime AS r ON p.idregime = r.idregime
            JOIN plat AS pl ON p.idplat = pl.idplat
            JOIN moment AS m ON pl.idmoment = m.idmoment
            JOIN choix AS c ON c.idchoix = pl.idchoix
            JOIN jour AS j ON p.idjour = j.idjour
            JOIN sport AS s ON r.idsport = s.idsport
            JOIN poids AS po ON r.idpoids = po.idpoids
            WHERE p.idregime = %s
            ORDER BY j.intituleJ";
            $sql = sprintf($sql, $this->db->escape($idregime));
            $query = $this->db->query($sql);
            $all = $query->result_array();
            return $all;
        } catch (\Throwable $th) {
            throw $th;
        }
    } 
    public function get_all_plats(){
        $query = $this->db->get('plat');
        return $query->result_array();
    }
    public function modifier_propositionJ1($idplat, $idjour,$idregime)
    {
        $idregime = intval(trim($idregime));
        $idplat = intval(trim($idplat));
        $idjour = 1;    
        $data = array(
            'idplat' => $idplat,
            'idjour' => $idjour,
            
        );
        $this->db->where('idregime', $idregime);
        $this->db->where('idjour', $idjour);
        $this->db->limit(1);
        $this->db->update('proposition', $data);
    }
    public function insert_plat($nomplat, $description, $idchoix, $idmoment){
        $data = array(
            'nomplat' => $nomplat,
            'description' => $description,
            'idchoix' => $idchoix,
            'idmoment' => $idmoment
        );
        $this->db->insert('plat', $data);
    }
    public function show_sport(){
        try {
            $sql = "SELECT * FROM sport as s JOIN choix AS c ON c.idchoix = s.idchoix";
            $query = $this->db->query($sql);
            $all = $query->result_array();
            return $all;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function get_sport($idsport)
    {
        $this->db->where('idsport', $idsport);
        $query = $this->db->get('sport');
        return $query->row_array();
    }   
    public function modifier_sport($idsport, $nomsport, $idchoix){
        $data = array(
            'nomsport' => $nomsport,
            'idchoix' => $idchoix
        );
        $this->db->where('idsport', $idsport);
        $this->db->update('sport', $data);
    }
    public function get_proposition_by_regime($idregime){
        $this->db->where('idregime', $idregime);
        $query = $this->db->get('proposition');
        return $query->row_array();
    }
    public function get_all_jours(){
        $query = $this->db->get('jour');
        return $query->result_array();
    }
    public function get_all_poids(){
        $query = $this->db->get('poids');
        return $query->result_array();
    }
    public function get_all_sports(){
        $query = $this->db->get('sport');
        return $query->result_array();
    }
    public function insert_regime($nomregime, $prix){
        $data = array(
            'nomregime' => $nomregime,
            'prix' => $prix
        );
        $this->db->insert('regime', $data);
    }
    public function get_max_indice(){
        $this->db->select_max('idregime');
        $query = $this->db->get('regime');
        $result = $query->row_array();
        
        return $result['idregime'];
    }
    public function insert_sport($nomsport, $idchoix){
        $sql = "INSERT INTO sport (nomsport, idchoix) VALUES (%s, %d)";
        $sql = sprintf($sql, $this->db->escape($nomsport), $idchoix);
        $this->db->query($sql);
    }
    public function delete_sport($idsport){
        $this->load->database();
        $this->db->where('idsport', $idsport);
        $this->db->delete('sport');
    }
    public function delete_regime($idregime)
    {
        $this->db->where('idregime', $idregime);
        $this->db->delete('regime');
    }
}

?>