<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarController extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Calendar_model');
    }


	public function index()
	{
        $this->load->view('calendarView');
    }  


}
