<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
    
    public function __construct() {
        parent::__construct(); //note: this creates database connection
    }
	
	public function add_contact($contact_data){
		$this->db->insert("contact", $contact_data);
		$error = $this->db->error();
		$success = ($error["code"] == 0);		
		return $success;
	}
	
 }// end contact model