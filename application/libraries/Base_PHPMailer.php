<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require BASEPATH.'libraries/PHPMailer/src/PHPMailer.php';
require BASEPATH.'libraries/PHPMailer/src/SMTP.php';
require BASEPATH.'libraries/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Base_PHPMailer {
	public  $_data = array();

	public function __construct($data = array()){
		$this->_data = $data;
		$this->Base_PHPMailer();
    }

	public function Base_PHPMailer(){
		$mail = new PHPMailer();
		$mail->isSMTP();
		//$mail->SMTPDebug = 1;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth = true;
		$mail->Username = "alejandro.enciso@entrepids.com";
		$mail->Password = "aenciso02";
		$mail->setFrom('soporte@redesgesa.com', 'Solicitud de informacion');
		$mail->addAddress($this->_data['email'] ,$this->_data['name'] );
		$mail->Subject = $this->_data['subject'];
		$mail->AltBody = 'Este correo es solo informativo';
		$mail->MsgHTML($this->_data['message']);
		$mail->SMTPOptions = array(
		   'ssl' => array(
		     'verify_peer' => false,
		     'verify_peer_name' => false,
		     'allow_self_signed' => true
		    )
		);

		if (!$mail->send()) {
		    $mail->ErrorInfo;
		    return false;
		} else {			
		    return true;
		}
	}
}
?>