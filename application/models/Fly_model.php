<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fly_model extends CI_Model
{    
    public function __construct()
    {
        $this->load->database();
    }
}

