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
		$mail = new PHPMailer;
		$mail->isSMTP();
		//$mail->SMTPDebug = 2;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "alejandro.enciso@entrepids.com";
		$mail->Password = "aenciso02";
		$mail->setFrom($this->_data['email'], $this->_data['name']);
		$mail->addAddress('ballack_8919@hotmail.com','Redes Gesa Solicitud');
		$mail->Subject = $this->_data['subject'];
		$mail->AltBody = 'Este correo es solo informativo';
		$mail->MsgHTML($this->_data['message']);
		if (!$mail->send()) {
		    $mail->ErrorInfo;
		    return false;
		} else {
		    return true;
		}
	}
}
?>