<?php


defined('BASEPATH') OR exit('No direct script access allowed');
class Testunit extends CI_Controller {
        public function __construct()
        {
            parent::__construct(); 
			$this->load->library("unit_test");	
        }
		
		
			public function test_create_model_brands()
		{
				$this->load->model('model_brands');
				$this->brands=new model_brands();
				$test=$this->brands->create_model_brands(brands, "puma");
				$expected_result=true;
				$test_name='testing add brands function';
				$ans=$this->unit->run($test,$expected_result,$test_name);
				echo $ans;
		}
}	