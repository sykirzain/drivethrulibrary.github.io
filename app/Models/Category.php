<?php

namespace App\Models;
use App\Libraries\BaseModel;
// use CodeIgniter\Model;

class Category extends BaseModel
{
	public function getAll()
	{
		return $this->db->category();
	}

	public function insert( $data )
	{
		$categories = $this->db->category();

		$failed = !$categories->insert( $data );
		if ( $failed ) {
			$this->flash->danger( 'Failed to add new category. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The new category has been added successfully!' );
		return true;
	}

	public function update( $data )
	{
		$id = $data[ 'id' ];
		unset( $data['id'] );
		$category = $this->db->category[ $id ];

		$affected = $category->update( $data );
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to update category. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No category has been updated. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The category has been updated successfully!' );
		return true;
	}

	public function delete( $data )
	{
		$id = $data[ 'id' ];
		$category = $this->db->category[ $id ];

		$affected = $category->delete();
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to delete category. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No category has been deleted. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The category has been deleted successfully!' );
		return true;
	}
}