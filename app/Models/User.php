<?php

namespace App\Models;
use App\Libraries\BaseModel;
// use CodeIgniter\Model;

class User extends BaseModel
{

	public function students()
	{
		return $this->db->user([ 'role'=>0 ])->select( "id, username, email, phone, matric_number, verified, created" );
	}

	public function insert_student( $data )
	{
		# Manage user password
			if ( empty($data['password']) ) {
				unset( $data['password'] );
			} else {
				$data[ 'password' ] = password_hash( $data['password'] , PASSWORD_DEFAULT);
			}

		$users = $this->db->user();

		$data[ 'verified' ] = 1;
		$data[ 'role' ] = 0;
		$failed = !$users->insert( $data );
		if ( $failed ) {
			$this->flash->danger( 'Failed to add new student. Please try again later!' );
			return false;
		}
		$this->flash->success( 'New student has been added successfully!' );
		return true;
	}

	public function update_student( $data )
	{
		$id = $data[ 'id' ];
		unset( $data['id'] );
		
		# Manage user password
			if ( empty($data['password']) ) {
				unset( $data['password'] );
			} else {
				$data[ 'password' ] = password_hash( $data['password'] , PASSWORD_DEFAULT);
			}

		$user = $this->db->user[ $id ];

		$affected = $user->update( $data );
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to update student data. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No student data has been updated. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The student data has been updated successfully!' );
		return true;
	}

	public function delete_student( $data )
	{
		$id = $data[ 'id' ];
		$user = $this->db->user[ $id ];

		$affected = $user->delete();
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to delete student data. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No student data has been deleted. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The student data has been deleted successfully!' );
		return true;
	}
}