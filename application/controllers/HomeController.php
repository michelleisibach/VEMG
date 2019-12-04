<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Home_model');
    }
    
    
    public function index()
	{
        $data['result'] = $this->Home_model->getAllMovies();
        $this->load->view('homeView', $data);
        $this->load->helper('url');
	}
}
