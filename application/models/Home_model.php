<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    
    function getAllMovies(){
        $query = $this->db->query('SELECT * FROM filme');
        return $query->result();
    }


}