<?php
/* Smarty version 4.1.0, created on 2022-06-08 11:10:17
  from 'C:\xampp\htdocs\library\app\Views\Librarian\reservation2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a0c9e9b34d96_93255567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f855cc8ad85d7c904740c05a7ee348203ec090' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Librarian\\reservation2.tpl',
      1 => 1654704614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:elements/topbar.tpl' => 1,
  ),
),false)) {
function content_62a0c9e9b34d96_93255567 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211752785862a0c9e9afa406_12713839', 'body');
?>















	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55713211862a0c9e9b2d099_16631820', 'styles');
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61795150762a0c9e9b30f18_16192846', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_211752785862a0c9e9afa406_12713839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_211752785862a0c9e9afa406_12713839',
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
						<th>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</th>
						<th>No.</th>
						<th>Customer</th>
						<th>Price Total</th>
						<th>Delivery Option</th>
						<th>Delivery Fee</th>
						<th>Payment Total</th>
						<th>Payment Status</th>
						<th>Created</th>
						<th>Actions</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'row', false, 'id');
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['row']->iteration++;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>
						<?php $_smarty_tpl->_assignInScope('delivery_option', array('No Delivery','Grabfood','Foodpanda'));?>
						<?php $_smarty_tpl->_assignInScope('payment_status', array("<div class='label label-primary'>In Progress</div>","<div class='label label-success'>Success</div>","<div class='label label-warning'>Pending</div>","<div class='label label-danger'>Fail</div>"));?>
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" id="chk-1">
								</div>
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->users['username'];?>
</td>
							<td>RM<?php echo $_smarty_tpl->tpl_vars['row']->value['price_total'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['row']->value['delivery_option']];?>
</td>
							<td>RM<?php echo $_smarty_tpl->tpl_vars['row']->value['delivery_fee'];?>
</td>
							<td>RM<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_total'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['payment_status']->value[$_smarty_tpl->tpl_vars['row']->value['payment_status']];?>
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
		<footer class="main">
			<!-- &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a> -->
			&copy; 2022 <strong>ABC</strong>
		</footer>
	</div>

		<!-- Edit Form-->
		<div class="modal fade" id="edit-order">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Order</h4>
					</div>
					<form method="POST">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="id" value="">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Customer Name</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="customer_name" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Price Total</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">RM</span>
											<input name="price_total" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Delivery Option</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="delivery_option" class="form-control">
												<option value="0">No Delivery Option</option>
												<option value="1">Grabfood</option>
												<option value="2">Foodpanda</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Delivery Fee</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">RM</span>
											<input name="delivery_fee" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Payment Total</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">RM</span>
											<input name="payment_total" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Payment Status</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="payment_status" class="form-control">
												<option value="0">In Progress</option>
												<option value="1">Success</option>
												<option value="2">Pending</option>
												<option value="3">Fail</option>
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
		<div class="modal fade" id="view-order">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">View Order</h4>
					</div>
					<form method="POST">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Customer Name</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="customer_name" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Price Total</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">RM</span>
											<input name="price_total" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Delivery Option</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="delivery_option" class="form-control" disabled="disabled">
												<option value="0">No Delivery Option</option>
												<option value="1">Grabfood</option>
												<option value="2">Foodpanda</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Delivery Fee</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">RM</span>
											<input name="delivery_fee" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Payment Total</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">RM</span>
											<input name="payment_total" type="text" class="form-control" disabled="disabled">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Payment Status</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="payment_status" class="form-control" disabled="disabled">
												<option value="0">In Progress</option>
												<option value="1">Success</option>
												<option value="2">Pending</option>
												<option value="3">Fail</option>
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
class Block_55713211862a0c9e9b2d099_16631820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_55713211862a0c9e9b2d099_16631820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block 'styles'} */
/* {block 'scripts'} */
class Block_61795150762a0c9e9b30f18_16192846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_61795150762a0c9e9b30f18_16192846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo '<script'; ?>
 type="text/javascript">
				$.noConflict();
				jQuery( window ).load( function() {
					var $table2 = jQuery( ".datatable" );
					// test = $table2;
					// console.log( $table2 );
					// Initialize DataTable
					window.datatable = $table2.DataTable( {
											"sDom": "tip",
											"bStateSave": false,
											"iDisplayLength": 8,
											// "aoColumns": [
												// { "bSortable": false },
											// 	null,
											// 	null,
											// 	null,
											// 	null
											// ],
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
					
				// Sample Function to add new row
				var giCount = 1;
				
				// function fnClickAddRow() {
				// 	jQuery('#table-2').dataTable().fnAddData( [ '<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4" ] );
				// 	replaceCheckboxes(); // because there is checkbox, replace it
				// 	giCount++;
				// }
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>listOfOrders = <?php echo $_smarty_tpl->tpl_vars['listOfOrdersInJSON']->value;?>
;<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
>
			function send_form_via_ajax( form ) {
				var data = $(form).serialize();
				send_data_via_ajax( data );
			}

			function send_data_via_ajax( data ) {
				// console.log( data );
				$.post( '', data,function( response ){
					console.log( response );
					if ( response.result ) {
						location.reload(true);
					}
				}, 'json');
			}

			function displayOrderDataInForm( orderID, form ) {
				var order = listOfOrders[ orderID ];
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( name == 'action' ) return;// exclude input hidden named 'action'
					input.val( order[ name ] );
				});
			}

			function createRowForCartItems( orderID, dtRow ) {
				var heading = $( '<tr>' )
									.append( '<th>Title</th>' )
									.append( '<th>Unit Price (RM)</th>' )
									.append( '<th>Quantity</th>' )
									.append( '<th>Total Price (RM)</th>' ),
					thead = $( '<thead>' ).append( heading ),
					tbody = $( '<tbody>' ),
					table = $( '<table class="table table-striped table-bordered table-hover">' ).append( thead ).append( tbody );

					


				$.post( '', { action:'cart_items',id:orderID },function( response ){
					var result = response.result, id, item, tr, total_price;
					// console.log( result );
					if ( result ) {
						for( id in result ) {
							item = result[ id ];
							total_price = item.quantity*item.unit_price;
							tr = $( '<tr>' )
										.append( '<td>'+item.product_name+'</td>' )
										.append( '<td>'+Number(item.unit_price).toFixed(2)+'</td>' )
										.append( '<td>'+item.quantity+'</td>' )
										.append( '<td>'+Number(total_price).toFixed(2)+'</td>' );
							tbody.append( tr );
						}
						dtRow.child( table ).show();
					} else {
						alert( 'Something went wrong!' );
					}
				}, 'json' );
			}

			function toggleCartItems( orderID, row ) {
				var dtRow = datatable.row( row );

				// Make sure a row for cart items have been created
					if ( !dtRow.child() ) {
						createRowForCartItems( orderID, dtRow );
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
							var orderID = $(this).data( 'id' ),
								form = $( '#edit-order form' );
							displayOrderDataInForm( orderID, form );

							$( '#edit-order' ).modal( 'show' );
						e.preventDefault();
					});
					
					$( '.btn-view' ).click(function(e){
							var orderID = $(this).data( 'id' ),
								form = $( '#view-order form' );
							displayOrderDataInForm( orderID, form );
							$( '#view-order' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this order?' ) ){
							send_data_via_ajax({id:id,action:'delete'});
						}
					});
					
					$( '.btn-items' ).click(function(){
						var btn = $(this),
							orderID = btn.data( 'id' ),
							row = btn.parents( 'tr' );
							toggleCartItems( orderID, row );
					});

					$( '#edit-order' ).find( 'form' ).submit(function(e){
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
