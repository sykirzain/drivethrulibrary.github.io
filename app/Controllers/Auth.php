<?php
namespace App\Controllers;
use App\Controllers\BaseController;






class Auth extends BaseController
{
	public function register()
	{
		$this->auth->register('', true, 'localhost:8080/auth/verify_email' );
	}

	public function login()
	{
		// exit;
		$this->auth->login(function( $row ) {
										if ( $this->hasError ) return;

										if ( $row[ 'role' ] == '1' ) return '../librarian/dashboard'; // 1 - Member area for librarians
										elseif ( $row[ 'role' ] == '0' ) return '../student/dashboard'; // 0 - Member area for students
									});
	}

	public function verify_email()
	{
		$this->tpl->autoRender = false;
		$this->auth->verifyEmail( '/auth/login' );
	}

	public function logout()
	{
		$this->tpl->autoRender = false;
		$this->auth->logout( '/auth/login' );
	}

	public function forgot_password()
	{
		$this->auth->forgotPassword('', 'http://localhost:8080/auth/reset_password' );
	}

	public function reset_password()
	{
		$user = [];
		$tpl = $this->tpl;
		$this->auth->resetPassword(function( $row ) use ( &$user, $tpl )
		{
			if ( $this->hasError && !$this->post ) {
				$tpl->autoRender = false;
				return '/auth/login';
			}
			if ( !$this->hasError && $this->post ) {
				$tpl->autoRender = false;
				return '/auth/login';
			}
			
			$user = $row;
		});

		$this->tpl->assign(compact( 'user' ));
	}
}
