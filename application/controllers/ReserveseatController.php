<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReserveseatController extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Reserveseat_model');
    }


	public function index()
	{
        $this->load->view('reserveseatView');
    }  


}
