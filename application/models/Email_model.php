<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    /*	
 *	@author 	: Muhammadhasim Mustak Tanderjawala
 *	360 Education System
 *	http://www.sefion.com/our_work/360education
 */

	function account_opening_email($account_type = '' , $email = '', $password = '')
	{
		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;

		$email_msg		=	"Welcome to ".$system_name."<br />";
		$email_msg		.=	"Your account type : ".$account_type."<br />";
		$email_msg		.=	"Your login password : ". $password ."<br />";
		$email_msg		.=	"Login Here : ".base_url()."<br />";

		$email_sub		=	"Account opening email";
		$email_to		=	$email;

		//$this->do_email($email_msg , $email_sub , $email_to);
		$this->send_php_mail($email_msg , $email_sub , $email_to);
	}

	function password_reset_email($new_password = '' , $account_type = '' , $email = '')
	{
		$query			=	$this->db->get_where($account_type , array('email' => $email));
		if($query->num_rows() > 0)
		{

			$email_msg	=	"Your account type is : ".$account_type."<br />";
			$email_msg	.=	"Your password is : ".$new_password."<br />";

			$email_sub	=	"Password reset request";
			$email_to	=	$email;
			//$this->do_email($email_msg , $email_sub , $email_to);
			$this->send_php_mail($email_msg , $email_sub , $email_to);
			return true;
		}
		else
		{
			return false;
		}
	}

	function contact_message_email($email_from, $email_to, $email_message) {
		$email_sub = "Message from School Website";
		//$this->do_email($email_message, $email_sub, $email_to, $email_from);
		$this->send_php_mail($email_message, $email_sub, $email_to, $email_from);
	}

    function personal_message_email($email_from, $email_to, $email_message) {
        $email_sub = "Message from School Website";
        //$this->do_email($email_message, $email_sub, $email_to, $email_from);
        $this->send_php_mail($email_message, $email_sub, $email_to, $email_from);
    }

	/***custom email sender****/
	function do_email($msg=NULL, $sub=NULL, $to=NULL, $from=NULL)
	{

		/*$config = array();
        $config['useragent']	= "CodeIgniter";
        $config['mailpath']		= "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']		= "smtp";
        $config['smtp_host']	= "ssl://smtp.googlemail.com";
        $config['smtp_port']	= "465";
        $config['smtp_user']	= 'sefionitservices@gmail.com';
        $config['smtp_pass']	= '751/?751';
        $config['mailtype']		= 'html';
        $config['charset']		= 'utf-8';
        $config['newline']		= "\r\n";
        $config['wordwrap']		= TRUE;*/
        // Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","ssl://smtp.googlemail.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","465");

// Please specify the return address to use


        $this->load->library('email');

        $this->email->initialize($config);

		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		if($from == NULL)
			$from		=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;
ini_set('sendmail_from', $from);
		//$this->email->from($from, $system_name);
		$this->email->from($from, $system_name);
		$this->email->to($to);
		$this->email->subject($sub);

		$msg	=	$msg."<br /><br /><br /><br /><br /><br /><br /><hr /><center><a href=\"http://sefion.com\">&copy; 2015-2019 360 Education System</a></center>";
		$this->email->message($msg);

		$this->email->send();

		echo $this->email->print_debugger();
	}

	public function send_php_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL, $attachment_url=NULL) {

	   $from = $this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;

	   $headers = "From: ".$from."\r\n";
	   $headers .= "Reply-To: ".$to."\r\n";
	   $headers .= "Return-Path: ".$to."\r\n";
	   //$headers .= "CC: demo@gmail.com\r\n";
	   //$headers .= "BCC: demo@gmail.com\r\n";
	   if ( $attachment_url != NULL) {
		   $msg .=	"\r\nAttachment URL: ".$attachment_url;
	   }
	   if ( mail($to,$sub,$msg,$headers) ) {

	   } else {
		   echo "The email has failed!";
	   }
   }
}
