<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data['css'] 	= $this->urlCss();
		$data['lib'] 	= $this->urllib();
		$data['img'] 	= $this->urlimg();
		$data['js'] 	= $this->urljs();
		$data['includes_js'] = '<script src="'.$this->urljs().'email.js"></script>';
		$this->load->view('header',$data);
		$this->load->view('index',$data);
		$this->load->view('footer',$data);
		/*$this->load->view('welcome_message');*/
	}
}
