<?php
namespace App\Libraries;
use App\Libraries\CI_NotORM;
use App\Libraries\TPL;

require_once APPPATH.'ThirdParty/PHPMailer/src/PHPMailer.php';
require_once APPPATH.'ThirdParty/PHPMailer/src/SMTP.php';
require_once APPPATH.'ThirdParty/PHPMailer/src/Exception.php';
require_once APPPATH.'ThirdParty/EzFlash.php';
require_once APPPATH.'ThirdParty/EzAuth.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use elmyrockers\EzFlash;
use elmyrockers\EzAuth;





/**
 * 
 */
class CI_EzAuth extends EzAuth
{
	public function __construct()
	{
		$db = new CI_NotORM;
		$tpl = new TPL;
		$tpl->autoRender = false;
		$mail = new PHPMailer(true);
		$flash = new EzFlash;


		parent::__construct([ $db, $tpl, $mail, $flash ]);
	}
}