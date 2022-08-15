<?php
/* Smarty version 4.1.0, created on 2022-07-26 00:22:33
  from 'C:\xampp\htdocs\library2\app\Views\Librarian\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62df7a192f1829_63424644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5f762d6e16daaf96842dd22413c474dc06b8c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library2\\app\\Views\\Librarian\\categories.tpl',
      1 => 1657439323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
    'file:Elements/footer.tpl' => 1,
  ),
),false)) {
function content_62df7a192f1829_63424644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170405021662df7a192e58c6_57350127', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119709566362df7a192f0878_91395018', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_170405021662df7a192e58c6_57350127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_170405021662df7a192e58c6_57350127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="main-content">
				
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/topbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<ol class="breadcrumb bc-3" >
			<li>
				<a href="#"><i class="fa-home"></i>Home</a>
			</li>
			<li>
				<a href="#">Pages</a>
			</li>
			<li class="active">
				<strong>Categories</strong>
			</li>
		</ol>		
		
		<h2>Categories</h2>
		<br>

		<?php echo $_smarty_tpl->tpl_vars['flash']->value;?>

		<table class="table table-bordered table-striped datatable">
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'row', false, 'id');
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['row']->iteration++;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
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
						</td>
					</tr>
				<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		
		<br />
		
		<a href="" class="btn btn-primary btn-add">
			<i class="entypo-plus"></i> Add New Category
		</a>
		
		
		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>

		<!-- Add Form-->
		<div class="modal fade" id="add-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Add New Category</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="add">
						<div class="modal-body">
							<div class="form-horizontal">
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
	<!-- Edit Form-->
		<div class="modal fade" id="edit-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Category</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="id" value="">
						<div class="modal-body">
							<div class="form-horizontal">
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
		<div class="modal fade" id="view-category">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">View Category</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="add">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="name" type="text" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Desciption</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="description" type="text" class="form-control" readonly>
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
/* {block 'scripts'} */
class Block_119709566362df7a192f0878_91395018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_119709566362df7a192f0878_91395018',
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
>listOfCategories = <?php echo json_encode($_smarty_tpl->tpl_vars['categories']->value);?>
;<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
>
			function send_form_via_ajax( form ) {
				var data = new FormData( form );
				send_data_via_ajax2( data );
			}
			function send_data_via_ajax( data ) {
				// console.log( data );return;
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
			function displayCategoryDataInForm( categoryID, form ) {
				var category = listOfCategories[ categoryID ];
				console.log( category );
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( $.inArray(name,[ 'action','picture' ]) >= 0 ) return;// exclude input hidden named 'action' and 'picture'
					console.log( name+': '+category[name] );
					input.val( category[ name ] );
				});

				return;
			}
			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For modal functionality
					$( '.btn-add' ).click(function(e){
							$( '#add-category' ).modal( 'show' );
						e.preventDefault();
					});
					$( '.btn-edit' ).click(function(e){
							var categoryID = $(this).data( 'id' ),
								form = $( '#edit-category form' );
							displayCategoryDataInForm( categoryID, form );

							$( '#edit-category' ).modal( 'show' );
						e.preventDefault();
					});
					
					$( '.btn-view' ).click(function(e){
							var categoryID = $(this).data( 'id' ),
								form = $( '#view-category form' );
							displayCategoryDataInForm( categoryID, form );
							$( '#view-category' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(e){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this category?' ) ){
							console.log( id );
							send_data_via_ajax({id:id,action:'delete'});
						}
						e.preventDefault();
					});
					$( '#add-category, #edit-category' ).find( 'form' ).submit(function(e){
						send_form_via_ajax( this );
						e.preventDefault();
					});
			}); //-------------------------------------------------------------------------------------------------------------------
		<?php echo '</script'; ?>
>
		
<?php
}
}
/* {/block 'scripts'} */
}
