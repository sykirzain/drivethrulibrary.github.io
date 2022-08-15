<?php

namespace App\Models;
use App\Libraries\BaseModel;
// use CodeIgniter\Model;

class Wishlist extends BaseModel
{
	public function getAllByUserID( $userID )
	{
		$wishlist = $this->db->user[ $userID ]->wishlist();
		foreach ( $wishlist as $id => $row ) {
			$row[ 'book' ] = $row->book;
			$wishlist[ $id ] = $row;
		}

		return $wishlist;
	}

	public function add_new_book( $data )
	{
		$status = -1;
		$message = '';

		# Make sure there are no duplicate book
			$allOfWishlist = $this->db->wishlist();
			foreach ( $allOfWishlist as $id => $row ) {
				if ( $row[ 'book_id' ] == $data[ 'book_id' ] ) {
					$status = 0;
					$message = 'The book is already in wishlist.';
					return compact( 'status', 'message' );
				}
			}

		# Insert new book into wishlist
			$wishlist = $this->db->wishlist()->insert( $data );
			if ( !$wishlist ) {
				$message = 'Failed to add new book into wishlist. Please try again.';
				return compact( 'status', 'message' );
			}

		$status = 1;
		$message = 'The book has been added to wishlist successfully.';
		return compact( 'status', 'message' );
	}

	public function delete_item( $data )
	{
		# Get cart item, make sure it does exist
			$wishlist = $this->db->wishlist[ $data[ 'wishlist_id' ] ];
			if ( !$wishlist ) {
				$this->flash->danger( 'The item that you want to delete is no longer exist.' );
				return false;
			}

		# Delete cart item
			$deleted = $wishlist->delete();
			if ( !$deleted ) {
				$this->flash->danger( 'Failed to delete selected item. Please try again later!' );
				return false;
			}

		$this->flash->success( 'The item has been deleted successfully!' );
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