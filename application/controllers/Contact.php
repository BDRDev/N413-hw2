<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct() {
        parent::__construct();
        //loads the models functions
        $this->load->model('contact_model');
    }


	public function index(){
		$this->load->view('head');
		$this->load->view('contact-form');
	}

	public function add_contact(){
		$contact_data = $this->input->post();
		$contact = $this->contact_model->add_contact($contact_data);
		$data = Array();
		$this->load->view('head'); 
		if ($contact){
			$this->load->view('success');
		}else{
			$this->load->view('failed');
		}
	}

}
