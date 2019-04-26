<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testunit extends CI_Controller {
        public function __construct()
        {
            parent::__construct(); 
			$this->load->$this->{'testlogin'};	
        }
		
		
		private function login($email,$password){
			return $email && $password;
 		}
		
		public function index(){
			echo "Using Unit Test Library";	
			$test = $this->login("email","password");
			$expected_result = ($email="mandira@gmail.com" && $password="1234567890");
			$test_name = "login test function";
			echo $this->unit->run($test,$expected_result,$test_name);
		}	
}		


	
	