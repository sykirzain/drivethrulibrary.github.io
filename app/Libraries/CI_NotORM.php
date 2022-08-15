<?php
namespace App\Libraries;

require_once APPPATH.'ThirdParty/NotORM/NotORM.php';




/**
 * 
 */
class CI_NotORM extends \NotORM
{
	public function __construct()
	{
		$config = config(\Config\Database::class)->default;
		$pdo = new \PDO(
						$config[ 'DSN' ],
						$config[ 'username' ],
						$config[ 'password' ]
						);
		parent::__construct( $pdo );
	}
}