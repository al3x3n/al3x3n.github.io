<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                //$this->load->helper('url');
                $this->lang->load('spanish_lang', 'spanish');
                //$this->baseurl();
        }

	public function urlCss(){
		return base_url().'assets/css/';
	}
	public function urllib(){
		return base_url().'assets/lib/';
	}
	public function urlimg(){
		return base_url().'assets/images/';
	}
	public function urljs(){
		return base_url().'assets/js/';
	}
	/*public function baseurl(){
		$base_url = base_url();
		$base_url = explode("/", $base_url);
		return $base_url[0];
	}*/
}
