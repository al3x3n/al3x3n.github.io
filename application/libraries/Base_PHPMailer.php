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
		echo '<pre>';
		print_r($this->_data);
		echo '</pre>';
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth = true;
		$mail->Username = "alejandro.enciso@entrepids.com";
		$mail->Password = "aenciso02";
		$mail->setFrom('aalvaro.encisoj@outlook.com', 'Solicitud de información');
		$mail->addAddress('aalvaro.encisoj@outlook.com',$this->_data['name'] );
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