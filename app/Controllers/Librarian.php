<?php

namespace App\Controllers;

use App\Controllers\MemberAreaController;

class Librarian extends MemberAreaController
{
	public function dashboard()
	{
		
		$newReservations = model( 'Reservation' )->getAllNewReservations();
		$books = model( 'Book' )->getAll();
		$students = model( 'User' )->students();
		$reservations = model( 'Reservation' )->getAll();

		// d( $newReservations );


		// $newReservations = count( $books );
		$totalOfNewReservations = count( $newReservations );
		$availableBooks = count( $books );
		
		$totalOfStudents = count( $students );
		$totalOfReservations = count( $reservations );
		$this->tpl->assign(compact('totalOfNewReservations','availableBooks', 'totalOfStudents','totalOfReservations'));
	}

	private function _reservation_get_cart_items()
	{		
		$reservations = model( 'Reservation' )->getAll();
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

	private function _process_reservation_form_if_it_has_been_sent()
	{
		# Make sure form has been sent
			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$reservationModel = model( 'Reservation' );

		# Process form
			$result = false;
			if ( $action == 'edit' ) $result = $reservationModel->update( $_POST );
			if ( $action == 'delete' ) $result = $reservationModel->delete( $_POST );
			if ( $action == 'cart_items' ) $result = $reservationModel->get_cart_items();

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	private function _process_students_form_if_it_has_been_sent()
	{
		# Make sure form has been sent
			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$userModel = model( 'User' );

		# Process form
			$result = false;
			if ( $action == 'add' ) $result = $userModel->insert_student( $_POST );
			if ( $action == 'edit' ) $result = $userModel->update_student( $_POST );
			if ( $action == 'delete' ) $result = $userModel->delete_student( $_POST );

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	private function _process_categories_form_if_it_has_been_sent()
	{
		# Make sure form has been sent
			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$categoryModel = model( 'Category' );

		# Process form
			$result = false;
			if ( $action == 'add' ) $result = $categoryModel->insert( $_POST );
			if ( $action == 'edit' ) $result = $categoryModel->update( $_POST );
			if ( $action == 'delete' ) $result = $categoryModel->delete( $_POST );

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	private function _process_books_form_if_it_has_been_sent()
	{
		# Make sure form has been sent
			if ( $_SERVER[ 'REQUEST_METHOD' ] != 'POST' ) return;
			$action = $_POST[ 'action' ];
			unset( $_POST['action'] );

			$bookModel = model( 'Book' );

		# Process form
			$result = false;
			if ( $action == 'add' ) $result = $bookModel->insert( $_POST );
			if ( $action == 'edit' ) $result = $bookModel->update( $_POST );
			if ( $action == 'delete' ) $result = $bookModel->delete( $_POST );

		echo json_encode(compact( 'result' ));
		$this->tpl->autoRender = false;
		exit;
	}

	public function reservation()
	{
		$this->_process_reservation_form_if_it_has_been_sent();

		$reservations = model( 'Reservation' )->getAll();
		$this->tpl->assign(compact( 'reservations' ));
	}

	public function categories()
	{
		$this->_process_categories_form_if_it_has_been_sent();
		
		$categories = model( 'Category' )->getAll();
		$this->tpl->assign(compact( 'categories' ));
	}

	public function list_of_books()
	{
		$this->_process_books_form_if_it_has_been_sent();

		$categories = model( 'Category' )->getAll();
		$books = model( 'Book' )->getAll();
		$this->tpl->assign(compact( 'categories','books' ));
	}

	public function students()
	{
		$this->_process_students_form_if_it_has_been_sent();
		
		$students = model( 'User' )->students();
		$this->tpl->assign(compact( 'students' ));
	}
}
