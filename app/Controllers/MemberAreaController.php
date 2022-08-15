<?php
namespace App\Controllers;

require_once APPPATH.'ThirdParty/debugging.php';

/**
 * Class MemberAreaController
 *
 * This class is here to check permission for all users after he/she logged in.
 * Its methods will be available for all member area controller that extends this class
 * Extend this class in any new controllers:
 *     class Home extends MemberAreaController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class MemberAreaController extends BaseController
{
	private $roles = [
						'Librarian'=>1,
						'Student'=>0
					];
	protected $user;
	/**
	 * Constructor.
	 */
	public function initController( $request, $response, $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		// Preload any models, libraries, etc, here.
			$router = service('router');
			$controllerName  = $router->controllerName();
			$controllerName = str_replace( '\App\Controllers\\', '', $controllerName );
			if ( !in_array($controllerName, array_keys($this->roles)) ) return;


			$tpl = $this->tpl;
			$user = $this->auth->memberArea(function( $row ) use ($tpl)
						{
							if ( $this->hasError ) {
								$tpl->autoRender = false;
								return '/auth/login';
							}
						}, $this->roles[$controllerName], true );
			$this->user = $user;

			$this->tpl->assign(compact( 'user' ));

		// E.g.: $this->session = \Config\Services::session();


	}
}
