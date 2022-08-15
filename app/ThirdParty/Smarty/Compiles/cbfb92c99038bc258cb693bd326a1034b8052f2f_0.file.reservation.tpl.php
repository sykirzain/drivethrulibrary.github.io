<?php
/* Smarty version 4.1.0, created on 2022-07-10 03:09:17
  from 'C:\xampp\htdocs\library\app\Views\Librarian\reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ca892d02be28_52237850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfb92c99038bc258cb693bd326a1034b8052f2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Librarian\\reservation.tpl',
      1 => 1657440554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/topbar.tpl' => 1,
    'file:Elements/footer.tpl' => 1,
  ),
),false)) {
function content_62ca892d02be28_52237850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22392560362ca892cf33890_30594048', 'body');
?>















	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184819731662ca892d024123_09469124', 'styles');
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86937908162ca892d027fa7_32455292', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_22392560362ca892cf33890_30594048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_22392560362ca892cf33890_30594048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="main-content">
				
		<?php $_smarty_tpl->_subTemplateRender('file:elements/topbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
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
		
		<?php echo $_smarty_tpl->tpl_vars['flash']->value;?>

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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'row', false, 'id');
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['row']->iteration++;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>
						<?php $_smarty_tpl->_assignInScope('delivery_option', array('No Delivery','Grabfood','Foodpanda'));?>
						<?php $_smarty_tpl->_assignInScope('status', array("<div class='label label-primary'>In Progress</div>","<div class='label label-success'>Success</div>","<div class='label label-warning'>Pending</div>","<div class='label label-danger'>Fail</div>","<div class='label label-danger'>Rejected</div>"));?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->user['username'];?>
</td>
							<td><?php echo count($_smarty_tpl->tpl_vars['row']->value->cart->cart_item());?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['start'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['end'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['row']->value['status']];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['created'];?>
</td>
							<td>
								<button class="btn btn-default btn-md btn-icon icon-left btn-edit" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="entypo-pencil"></i>Edit</button>
								
								<button class="btn btn-danger btn-md btn-icon icon-left btn-delete" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="entypo-cancel"></i>Delete</button>
								
								<button class="btn btn-info btn-md btn-icon icon-left btn-view" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="entypo-info"></i>View</button>
								
								<button class="btn btn-primary btn-md btn-icon icon-left btn-items" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="entypo-basket"></i>Items</button>
							</td>
						</tr>
					<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		
		<br />		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>

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
<?php
}
}
/* {/block 'body'} */
/* {block 'styles'} */
class Block_184819731662ca892d024123_09469124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_184819731662ca892d024123_09469124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block 'styles'} */
/* {block 'scripts'} */
class Block_86937908162ca892d027fa7_32455292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_86937908162ca892d027fa7_32455292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo '<script'; ?>
 type="text/javascript">
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
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>listOfReservations = <?php echo json_encode($_smarty_tpl->tpl_vars['reservations']->value);?>
;<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
>
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
		<?php echo '</script'; ?>
>
		
	<?php
}
}
/* {/block 'scripts'} */
}
