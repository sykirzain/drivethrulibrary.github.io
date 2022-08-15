<?php
namespace App\Libraries;

require_once APPPATH.'ThirdParty/Smarty/libs/Smarty.class.php';
require_once APPPATH.'ThirdParty/EzFlash.php';

use elmyrockers\EzFlash;



/**
 * 
 */
class TPL extends \Smarty
{
	public $autoRender = true;
	public function __construct()
	{
		parent::__construct();

		$this->setTemplateDir( APPPATH.'Views/' );
		$this->setCompileDir( APPPATH.'ThirdParty/Smarty/Compiles/' );
		$this->setConfigDir( APPPATH.'ThirdParty/Smarty/Config/' );
		$this->setCacheDir( APPPATH.'ThirdParty/Smarty/Cache/' );
	}

	/**
	 * displays a Smarty template
	 *
	 * @param string $template   the resource handle of the template file or template object
	 * @param mixed  $cache_id   cache id to be used with this template
	 * @param mixed  $compile_id compile id to be used with this template
	 * @param object $parent     next higher level of Smarty variables
	 *
	 * @throws \Exception
	 * @throws \SmartyException
	 */
	public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
	{
		parent::display( $template, $cache_id, $compile_id, $parent );
	}

	public function __destruct()
	{
		if ( !$this->autoRender ) return;

		# Allow page to be rendered automatically
			$router = service('router');
			$controller  = $router->controllerName();
			$controller = str_replace( '\App\Controllers\\', '', $controller );
			$method = $router->methodName();

			$flash = new EzFlash;
			$this->assign(compact('flash','controller','method'));
			$this->display( "$controller/$method.tpl" );
	}
}