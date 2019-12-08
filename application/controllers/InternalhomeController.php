<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternalhomeController extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Internalhome_model');
    }


	public function index()
	{
        $this->load->view('internalhomeView');
    }  


}
