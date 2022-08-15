{extends file="layouts/member_area.tpl"}
{block name=body}
	<div class="main-content">
				
		{include file='elements/topbar.tpl'}
		
		<ol class="breadcrumb bc-3">
			<li>
				<a href="#"><i class="fa-home"></i>Home</a>
			</li>
			<li>
				<a href="#">Pages</a>
			</li>
			<li class="active">
				<strong>Reservation</strong>
			</li>
		</ol>		
		
		<h2>Reservation</h2>
		<br>
		
		{$flash}
		{* <div class="table-responsive"> *}
			<table class="table table-bordered table-striped datatable">
				<thead>
					<tr>
						<th>No.</th>
						<th>Student Name</th>
						<th>Number of Books</th>
						<th>Start</th>
						<th>End</th>
						<th>Status</th>
						<th>Created</th>
						<th>Actions</th>
					</tr>
				</thead>
				
				<tbody>
					{foreach $reservations as $id => $row}
						{$delivery_option = [ 'No Delivery', 'Grabfood', 'Foodpanda' ]}
						{$status = [
											"<div class='label label-primary'>In Progress</div>",
											"<div class='label label-success'>Success</div>",
											"<div class='label label-warning'>Pending</div>",
											"<div class='label label-danger'>Fail</div>",
											"<div class='label label-danger'>Rejected</div>"
											]}
						<tr>
							<td>{$row@iteration}</td>
							<td>{$row->user.username}</td>
							<td>{count($row->cart->cart_item())}</td>
							<td>{$row.start}</td>
							<td>{$row.end}</td>
							<td>{$status[ $row.status ]}</td>
							<td>{$row.created}</td>
							<td>
								<button class="btn btn-default btn-md btn-icon icon-left btn-edit" data-id="{$id}"><i class="entypo-pencil"></i>Edit</button>
								
								<button class="btn btn-danger btn-md btn-icon icon-left btn-delete" data-id="{$id}"><i class="entypo-cancel"></i>Delete</button>
								
								<button class="btn btn-info btn-md btn-icon icon-left btn-view" data-id="{$id}"><i class="entypo-info"></i>View</button>
								
								<button class="btn btn-primary btn-md btn-icon icon-left btn-items" data-id="{$id}"><i class="entypo-basket"></i>Items</button>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		{* </div> *}

		<br />		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		{include file='Elements/footer.tpl'}
	</div>

	{* Modal for CRUD functionality *}
	<!-- Edit Form-->
		<div class="modal fade" id="edit-reservation">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Reservation</h4>
					</div>
					<form method="POST">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="id" value="">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Student's Username</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="username" type="text" class="form-control" disabled>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Start</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="start" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">End</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="end" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Status</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="status" class="form-control">
												<option value="0">In Progress</option>
												<option value="1">Success</option>
												<option value="2">Pending</option>
												<option value="3">Fail</option>
												<option value="4">Rejected</option>
											</select>
										</div>
											
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-info">Save changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- View Form-->
		<div class="modal fade" id="view-reservation">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">View Reservation</h4>
					</div>
					<form method="POST">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Student's Username</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="username" type="text" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Start</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="start" type="text" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">End</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="end" type="text" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Status</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="status" class="form-control" disabled>
												<option value="0">In Progress</option>
												<option value="1">Success</option>
												<option value="2">Pending</option>
												<option value="3">Fail</option>
												<option value="4">Rejected</option>
											</select>
										</div>
											
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
{/block}














{*--------------------------------------------------- Styles ----------------------------------------------------*}
	{block name=styles}
	{/block}
{*--------------------------------------------------- Scripts ----------------------------------------------------*}
	{block name=scripts}
		<script type="text/javascript">
			$.noConflict();
			jQuery( document ).ready( function( $ ) {
				var table = $( '.datatable' );
				
				// Initialize DataTable
				datatable = table.DataTable( {
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true
				});
				
				// Initalize Select Dropdown after DataTables is created
				table.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
					minimumResultsForSearch: -1
				});
			} );
		</script>
		<script>listOfReservations = {json_encode($reservations)};</script>
		{literal}
		<script>
			function send_form_via_ajax( form ) {
				var data = $(form).serialize();
				send_data_via_ajax( data );
			}

			function send_data_via_ajax( data ) {
				console.log( data );
				$.post( '', data,function( response ){
					console.log( response );
					// if ( response.result ) {
						location.reload(true);
					// }
				}, 'json');
			}

			function displayReservationDataInForm( reservationID, form ) {
				var reservation = listOfReservations[ reservationID ];
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( name == 'action' ) return;// exclude input hidden named 'action'
					input.val( reservation[ name ] );
				});
			}

			function createRowForCartItems( reservationID, dtRow ) {
				var heading = $( '<tr>' )
									.append( '<th>ID</th>' )
									.append( '<th>Title</th>' )
									.append( '<th>Picture</th>' ),
					thead = $( '<thead>' ).append( heading ),
					tbody = $( '<tbody>' ),
					table = $( '<table class="table table-striped table-bordered table-hover">' ).append( thead ).append( tbody );


				$.post( '', { action:'cart_items',id:reservationID },function( response ){
					// console.log( response.result ); return;
					var result = response.result, id, item, tr, total_price;
					// console.log( result );
					if ( result ) {
						for( id in result ) {
							item = result[ id ];
							item.picture = !item.picture? 'default.jpg' : item.picture;
							tr = $( '<tr>' )
										.append( '<td>'+item.id+'</td>' )
										.append( '<td>'+item.name+'</td>' )
										.append( '<td><img class="img-thumbnail img-responsive" width="200px" src="/assets/books/'+item.picture+'"></td>' );
							tbody.append( tr );
						}
						dtRow.child( table ).show();
					} else {
						alert( 'Something went wrong!' );
					}
				}, 'json' );
			}

			function toggleCartItems( reservationID, row ) {
				var dtRow = datatable.row( row );

				// Make sure a row for cart items have been created
					if ( !dtRow.child() ) {
						createRowForCartItems( reservationID, dtRow );
					}

				// Hide if it has been displayed
					if ( dtRow.child.isShown() ) {
						dtRow.child.hide(); // Hide cart itemss

				// Show if it is hidden
					} else {
						dtRow.child.show(); // Show cart items
					}
			}

			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For modal functionality
					$( '.btn-edit' ).click(function(e){
							var reservationID = $(this).data( 'id' ),
								form = $( '#edit-reservation form' );
							displayReservationDataInForm( reservationID, form );

							$( '#edit-reservation' ).modal( 'show' );
						e.preventDefault();
					});
					
					$( '.btn-view' ).click(function(e){
							var reservationID = $(this).data( 'id' ),
								form = $( '#view-reservation form' );
							displayReservationDataInForm( reservationID, form );
							$( '#view-reservation' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this reservation?' ) ){
							send_data_via_ajax({id:id,action:'delete'});
						}
					});
					
					$( '.btn-items' ).click(function(){
						var btn = $(this),
							reservationID = btn.data( 'id' ),
							row = btn.parents( 'tr' );
							toggleCartItems( reservationID, row );

							// console.log( reservationID );
					});

					$( '#edit-reservation' ).find( 'form' ).submit(function(e){
						send_form_via_ajax( this );
						e.preventDefault();
					});
			});//-------------------------------------------------------------------------------------------------------------------
		</script>
		{/literal}
	{/block}