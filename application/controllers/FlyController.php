<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FlyController extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Fly_model');
    }


	public function index()
	{
        $this->load->view('flyView');
    }  


}
