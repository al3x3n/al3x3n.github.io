<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends Base_Controller {

    public function index(){
        $dataArray = $this->input->post();
        $send = $this->load->library('Base_PHPMailer',$dataArray);
        $succes = false; 
        $msg    ='Ocurrio un error al momento de envíar su correo, intente nuevamente por favor.'; 
        if($send){
            $succes =true; 
            $msg    ='Se ha enviado el correo de manera correcta, a la brevedad nos pondremos en contacto con Usted, gracias.'; 
        }
        echo json_encode(array('succes'=>$succes,'msg'=>$msg));
   }   
}
