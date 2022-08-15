<?php
namespace App\Libraries;
use App\Libraries\CI_NotORM;

require_once APPPATH.'ThirdParty/EzFlash.php';
use elmyrockers\EzFlash;
/**
 * 
 */
class BaseModel
{
	protected $validation;
	protected $db;
	protected $flash;

	function __construct()
	{
		$this->validation = \Config\Services::validation();
		$this->db = new CI_NotORM;
		$this->flash = new EzFlash;
	}
}