<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternalfleetController extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Internalfleet_model');
    }


	public function index()
	{
        $data['result'] = $this->Internalfleet_model->getAllAircraftsExtended();
        $this->load->view('internalfleetView', $data);
        $this->load->helper('url');
    }  


}
