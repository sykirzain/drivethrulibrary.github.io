<?php

namespace App\Models;
use App\Libraries\BaseModel;
// use CodeIgniter\Model;

class Book extends BaseModel
{
	public function getAll()
	{
		return $this->db->book();
	}

	public function getAllForeachCategories()
	{
		$books = $this->getAll();
		$booksForeachCategories = [];
		foreach( $books as $id => $row ) {
			$categoryID = $row[ 'category_id' ];
			$booksForeachCategories[ $categoryID ][ $id ] = $row;
		}

		return $booksForeachCategories;
	}

	private function _process_fileupload()
	{
		# Make sure the picture has been uploaded
			if ( $_FILES[ 'picture' ][ 'error' ] > 0 ) {
				$this->flash->danger( 'Book cover picture is required!' );
				return;
			} 
			extract( $_FILES[ 'picture' ] ); // $name, $type, $tmp_name, $error, $size

		# Save file to specified folder
			$uploadDir = __DIR__."/../../public/assets/books/$name";
			if( !move_uploaded_file( $tmp_name, $uploadDir ) ) {
				$this->flash->danger( 'Failed to upload book cover picture. Please try again later!' );
				return false;
			}

		# Set uploaded filename for next process (to save it to database)
			$_POST[ 'picture' ] = $name;
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