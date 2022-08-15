<?php

namespace App\Controllers;

use App\Controllers\MemberAreaController;

class Student extends MemberAreaController
{
	public function dashboard()
	{
		$userID = $this->user[ 'id' ];

		$books = model( 'Book' )->getAll();
		$cartItems = model( 'Cart' )->getAllCartItemsByUserID( $userID );
		$wishlist = model( 'Wishlist' )->getAllByUserID( $userID );
		$reservation = model( 'Reservation' )->getAllByUserID( $userID );

		$availableBooks = count( $books );
		$totalOfCartItems = count( $cartItems );
		$totalOfWishlist = count( $wishlist );
		$totalOfReservations = count( $reservation );
		$this->tpl->assign(compact('availableBooks','totalOfCartItems','totalOfWishlist','totalOfReservations'));
	}

	private function _process_available_books_request()
	{
		# Make sure form has been sent
			
			// if ( !count($_GET) ) return;
			// $_POST = $_GET;

			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			// d( $_POST );
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$cartModel = model( 'Cart' );
			$wishlistModel = model( 'Wishlist' );
			$_POST[ 'user_id' ] = $this->user[ 'id' ];

		# Process form
			$result = false;
			if ( $action == 'add-to-cart' ) $result = $cartModel->add_new_book( $_POST );
			if ( $action == 'add-to-wishlist' ) $result = $wishlistModel->add_new_book( $_POST );

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	private function _process_cart_request()
	{
		# Make sure form has been sent
			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$cartModel = model( 'Cart' );
			$_POST[ 'user_id' ] = $this->user[ 'id' ];

		# Process form
			$result = false;
			if ( $action == 'delete' ) $result = $cartModel->delete_item( $_POST );
			if ( $action == 'borrow' ) $result = $cartModel->borrow( $_POST );

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	private function _process_wishlist_request()
	{
		# Make sure form has been sent
			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$wishlistModel = model( 'Wishlist' );
			$cartModel = model( 'Cart' );
			$_POST[ 'user_id' ] = $this->user[ 'id' ];

		# Process form
			$result = false;
			if ( $action == 'delete' ) $result = $wishlistModel->delete_item( $_POST );
			if ( $action == 'add_to_cart' ) $result = $cartModel->add_new_book_with_flash_message( $_POST );

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	public function available_books()
	{
		$this->_process_available_books_request();

		$userID = $this->user[ 'id' ];
		$books = model( 'Book' )->getAllForeachCategories();
		$category = model( 'Category' )->getAll();
		
		$this->tpl->assign(compact('books','category'));
	}

	public function cart()
	{
		$this->_process_cart_request();
		
		$userID = $this->user[ 'id' ];
		$cartItems = model( 'Cart' )->getAllCartItemsByUserID( $userID );
		$category = model( 'Category' )->getAll();
		
		$this->tpl->assign(compact('cartItems','category'));
	}

	public function wishlist()
	{
		$this->_process_wishlist_request();

		$userID = $this->user[ 'id' ];
		$wishlist = model( 'Wishlist' )->getAllByUserID( $userID );
		$category = model( 'Category' )->getAll();
		$this->tpl->assign(compact('wishlist','category'));
	}

	public function test()
	{
		$this->tpl->autoRender = false;

		// $_POST[ 'cart_item_id' ] = '16';
		// $_POST[ 'action' ] = 'delete';
		// $_SERVER[ 'REQUEST_METHOD' ] = 'POST';
		// $this->_process_cart_request();
		$_POST[ 'user_id' ] = $this->user[ 'id' ];
		
		$cartModel = model( 'Cart' );
		$cartModel->borrow( $_POST );
	}
}
