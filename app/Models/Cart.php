<?php

namespace App\Models;
use App\Libraries\BaseModel;
// use CodeIgniter\Model;

class Cart extends BaseModel
{
	private function _create_new_cart( $userID )
	{
		$cart = $this->db->cart()->insert([ 'user_id'=>$userID ]);
		if ( !$cart ) return false;
		
		$insertID = $cart[ 'id' ];

		return $this->db->cart[ $insertID ];
	}

	private function _getCurrentCart( $userID )
	{
		# Get all of the user's cart
			$carts = $this->db->user[ $userID ]->cart()->order( 'created DESC' );

		# Filter all of the carts, make sure no reservation has been linked yet to the cart
			foreach ( $carts as $id => $cart ) {
				$reservations = $cart->reservation();
				if( !count($reservations) ) {
					return $cart; // cart with no reservation
				}
			}

		# Create new cart if no cart with no reservation found
			return $this->_create_new_cart( $userID );
	}

	public function getAllCartItemsByUserID( $userID )
	{
		# Get latest cart
			$cart = $this->_getCurrentCart( $userID );
			if ( !$cart ) return [];

		# Get all cart items
			$cartItems = $cart->cart_item();
			foreach ($cartItems as $id => $row) {
				$row[ 'book' ] = $row->book;
				$cartItems[ $id ] = $row;
			}

		return $cartItems;
	}

	public function add_new_book( $data )
	{
		$status = -1;
		$message = '';

		# Get latest cart
			$cart = $this->_getCurrentCart( $data[ 'user_id' ] );
			if ( !$cart ) {
				$message = 'Failed to create new cart. Please try again.';
				return compact( 'status', 'message' );
			}

		# Make sure there are no duplicate book
			$cartItems = $cart->cart_item();
			foreach ( $cartItems as $id => $row ) {
				if ( $row[ 'book_id' ] == $data[ 'book_id' ] ) {
					$status = 0;
					$message = 'The book is already in cart.';
					return compact( 'status', 'message' );
				}
			}

		# Insert new book (item) into cart
			$cartItem = $cart->cart_item()->insert(['book_id'=>$data[ 'book_id' ]]);
			if ( !$cartItem ) {
				$message = 'Failed to add new cart item. Please try again.';
				return compact( 'status', 'message' );
			}

		$status = 1;
		$message = 'The book has been added to cart successfully.';
		return compact( 'status', 'message' );
	}

	public function add_new_book_with_flash_message( $data )
	{
		# Get latest cart
			$cart = $this->_getCurrentCart( $data[ 'user_id' ] );
			if ( !$cart ) {
				$this->flash->danger( 'Failed to create new cart. Please try again.' );
				return false;
			}

		# Make sure there are no duplicate book
			$cartItems = $cart->cart_item();
			foreach ( $cartItems as $id => $row ) {
				if ( $row[ 'book_id' ] == $data[ 'book_id' ] ) {
					$this->flash->warning( 'The book is already in cart.' );
					return false;
				}
			}

		# Insert new book (item) into cart
			$cartItem = $cart->cart_item()->insert(['book_id'=>$data[ 'book_id' ]]);
			if ( !$cartItem ) {
				$this->flash->danger( 'Failed to add new cart item. Please try again.' );
				return false;
			}

		$this->flash->success( 'The book has been added to cart successfully.' );
		return true;
	}

	public function delete_item( $data )
	{
		# Get cart item, make sure it does exist
			$cartItem = $this->db->cart_item[ $data[ 'cart_item_id' ] ];
			if ( !$cartItem ) {
				$this->flash->danger( 'The item that you want to delete is no longer exist.' );
				return false;
			}

		# Delete cart item
			$deleted = $cartItem->delete();
			if ( !$deleted ) {
				$this->flash->danger( 'Failed to delete selected item. Please try again later!' );
				return false;
			}

		$this->flash->success( 'The item has been deleted successfully!' );
		return true;
	}

	public function borrow( $data )
	{
		# Get current cart
			$cart = $this->_getCurrentCart( $data[ 'user_id' ] );
			if ( !$cart ) {
				$this->flash->danger( 'Failed to detect your cart. Please try again.' );
				return false;
			}

		# Make sure there is at least 1 item in cart
			if ( !count($cart) ) {
				$this->flash->danger( 'No item does exists in your cart.' );
				return false;
			}

		# Create new reservation
			$data[ 'cart_id' ] = $cart[ 'id' ];
			$data[ 'start' ] = date("Y-m-d H:i:s"); //now

			// $data[ 'end' ] = date("Y-m-d H:i:s", strtotime( '+1 day' )); //next day
			// $data[ 'end' ] = date("Y-m-d H:i:s", strtotime( '+4 days' )); //4 days
			// $data[ 'end' ] = date("Y-m-d H:i:s", strtotime( '+1 week' )); //next week
			$data[ 'end' ] = date("Y-m-d H:i:s", strtotime( '+2 weeks' )); //2 weeks
			// $data[ 'end' ] = date("Y-m-d H:i:s", strtotime( '+1 month' )); //next month
			$reservation = $this->db->reservation()->insert( $data );
			if ( !$reservation ) {
				$this->flash->danger( 'Failed to create new reservation. Please try again later.' );
				return false;
			}

		$this->flash->success( 'New reservation has been created successfully!<br>Now, you can go to the librarian counter and show your ID (username / matric number).' );
		return true;
	}

	public function insert( $data )
	{
		# Process fileupload first
			$uploadFailed = !$this->_process_fileupload();
			if( $uploadFailed ) return false;
			if ( isset($_POST['picture']) ) {
				$data[ 'picture' ] = $_POST[ 'picture' ];
			}

		$books = $this->db->book();

		$failed = !$books->insert( $data );
		if ( $failed ) {
			$this->flash->danger( 'Failed to add new book. Please try again later!' );
			return false;
		}
		$this->flash->success( 'New book has been added successfully!' );
		return true;
	}

	public function update( $data )
	{
		# Process fileupload first
			if ( $_FILES[ 'picture' ][ 'error' ] == 0 ) {
				$uploadFailed = !$this->_process_fileupload();
				if( $uploadFailed ) return false;
				$data[ 'picture' ] = $_POST[ 'picture' ];
			}

		$id = $data[ 'id' ];
		unset( $data['id'] );
		$book = $this->db->book[ $id ];

		$affected = $book->update( $data );
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to update book. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No book has been updated. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The book has been updated successfully!' );
		return true;
	}

	public function delete( $data )
	{
		$id = $data[ 'id' ];
		$book = $this->db->book[ $id ];

		$affected = $book->delete();
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to delete book. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No book has been deleted. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The book has been deleted successfully!' );
		return true;
	}
}