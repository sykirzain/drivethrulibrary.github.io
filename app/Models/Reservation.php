<?php

namespace App\Models;
use App\Libraries\BaseModel;
// use CodeIgniter\Model;

class Reservation extends BaseModel
{

	public function getAll()
	{
		$reservations = $this->db->reservation()->select( '*, DATE(start) AS start, DATE(end) AS end' );
		foreach ( $reservations as $id => $row ) {
			$reservations[ $id ][ 'username' ] = $row->user[ 'username' ];
		}
		return $reservations;
	}

	public function getAllNewReservations()
	{
		$reservations = $this->db->reservation(['status'=>0]);
		return $reservations;
	}

	public function getAllByUserID( $userID )
	{
		return $this->db->user[ $userID ]->reservation();
	}

	public function get_cart_items()
	{		
		$reservations = $this->getAll();
		$id = $_POST[ 'id' ];
		$reservation = $reservations[ $id ];
		if ( !$reservation ) {
			return false;
		}

		$cart_items = $reservation->cart->cart_item();

		$data = [];
		foreach( $cart_items as $id => $row ) {
			$data[ $id ] = [
							'id' => $id,
							'name' => $row->book[ 'name' ],
							'picture' => $row->book[ 'picture' ]
							];
		}

		return $data;
	}

	public function update( $data )
	{
		$id = $data[ 'id' ];
		unset( $data['id'] );
		$reservation = $this->db->reservation[ $id ];

		$affected = $reservation->update( $data );
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to update reservation. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No reservation has been updated. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The reservation has been updated successfully!' );
		return true;
	}

	public function delete( $data )
	{
		$id = $data[ 'id' ];
		$reservation = $this->db->reservation[ $id ];

		$affected = $reservation->delete();
		if ( $affected < 0 ) {
			$this->flash->danger( 'Failed to delete reservation. Please try again later!' );
			return false;
		} elseif ( $affected == 0 ) {
			$this->flash->warning( 'No reservation has been deleted. Please try again later!' );
			return false;
		}
		$this->flash->success( 'The reservation has been deleted successfully!' );
		return true;
	}
}