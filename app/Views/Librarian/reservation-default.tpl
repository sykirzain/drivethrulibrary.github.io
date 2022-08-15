{extends file="Layouts/member_area.tpl"}
{block name=body}
	<div class="main-content">
				
		{include file='Elements/topbar.tpl'}
		
		<ol class="breadcrumb bc-3" >
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
		
		<script type="text/javascript">
			jQuery( window ).load( function() {
				var $table2 = jQuery( ".datatable" );
				
				// Initialize DataTable
				$table2.DataTable( {
					"responsive": true,
					"sDom": "tip",
					"bStateSave": false,
					"iDisplayLength": 8,
					"aoColumns": [
						{ "bSortable": false },
						null,
						null,
						null,
						null,
						null,
						null
					],
					"bStateSave": true
				});
			} );
		</script>

		{$flash}
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
					<tr>
						<td>{$row@iteration}</td>
						<td>{$row->user.username}</td>
						<td></td>
						<td>{$row.start}</td>
						<td>{$row.end}</td>
						<td>{$row.status}</td>
						<td>{$row.created}</td>
						<td>
							<button class="btn btn-default btn-md btn-icon icon-left btn-edit" data-id="{$id}"><i class="entypo-pencil"></i>Edit</button>
							
							<button class="btn btn-danger btn-md btn-icon icon-left btn-delete" data-id="{$id}"><i class="entypo-cancel"></i>Delete</button>
							
							<button class="btn btn-info btn-md btn-icon icon-left btn-view" data-id="{$id}"><i class="entypo-info"></i>View</button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
		

		
		
		
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
						<h4 class="modal-title">Edit Book</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="add">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Book Picture</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input class="form-control" type="file" name="picture">
										</div>
											
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="name" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Desciption</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="description" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Total</label>
									<div class="col-sm-9">
										<div class="input-spinner">
											<button type="button" class="btn btn-default">-</button>
											<input name="total" type="text" class="form-control size-1" value="1" />
											<button type="button" class="btn btn-default">+</button>
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
						<h4 class="modal-title">View Book</h4>
					</div>
					<form method="POST">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Book Picture</label>
									<div class="col-sm-9">
										<img class="img-thumbnail img-responsive" src="../assets/books/default.jpg" alt="" width="200px">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="name" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Desciption</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="description" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Total</label>
									<div class="col-sm-9">
										<div class="input-spinner">
											<button type="button" class="btn btn-default" disabled="disabled">-</button>
											<input name="total" type="text" class="form-control size-1" value="1" disabled="disabled">
											<button type="button" class="btn btn-default" disabled="disabled">+</button>
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
{block name=scripts}
		<script type="text/javascript">
				$.noConflict();
				jQuery( window ).load( function() {
					var $table2 = jQuery( "#table-2" );
					
					// Initialize DataTable
					$table2.DataTable( {
						"sDom": "tip",
						"bStateSave": false,
						"iDisplayLength": 8,
						"aoColumns": [
							{ "bSortable": false },
							null,
							null,
							null,
							null
						],
						"bStateSave": true
					});
					
					// Highlighted rows
					$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
						var $this = $(el),
							$p = $this.closest('tr');
						
						$( el ).on( 'change', function() {
							var is_checked = $this.is(':checked');
							
							$p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
						} );
					} );
					
					// Replace Checboxes
					$table2.find( ".pagination a" ).click( function( ev ) {
						replaceCheckboxes();
					} );
				} );
		</script>
		{* <script src="../assets/admin/js/bootstrap.min.js"></script> *}
		<script>listOfReservations = {json_encode($reservations)};</script>
		{literal}
		<script>
			function send_form_via_ajax( form ) {
				var data = new FormData( form );
				send_data_via_ajax2( data );
			}
			function send_data_via_ajax( data ) {
				console.log( data );
				$.post( '', data,function( response ){
					console.log( response );
					if ( response.result ) {
						location.reload(true);
					}
				}, 'json');
			}
			function send_data_via_ajax2( data ) {
				console.log(data);
				$.ajax({
					method: 'POST',
					type: 'POST',
					processData: false,
					contentType: false,
					data: data,
					success: function( response ){
						// console.log( response );
						// response = $.parseJSON( response );
						// if ( response.result ) {
							location.reload( true );
						// }
					}
				});
			}
			function displayReservationDataInForm( reservationID, form ) {
				var reservation = listOfReservations[ reservationID ];
				console.log( reservation );
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( $.inArray(name,[ 'action','picture' ]) >= 0 ) return;// exclude input hidden named 'action' and 'picture'
					console.log( name+': '+reservation[name] );
					input.val( reservation[ name ] );
				});
				return;
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
					$( '#add-reservation, #edit-reservation' ).find( 'form' ).submit(function(e){
						send_form_via_ajax( this );
						e.preventDefault();
					});
			}); //-------------------------------------------------------------------------------------------------------------------
		</script>
		{/literal}
{/block}