<?php
/* Smarty version 4.1.0, created on 2022-07-25 14:30:56
  from 'C:\xampp\htdocs\library2\app\Views\Student\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62deef7082bba6_05662228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a3a6105215e50fe12a6ebfcf7c799da5d52b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library2\\app\\Views\\Student\\wishlist.tpl',
      1 => 1657416887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
    'file:Elements/footer.tpl' => 1,
  ),
),false)) {
function content_62deef7082bba6_05662228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110668279762deef7081d990_15223391', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13767401962deef7082ab19_58240846', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_110668279762deef7081d990_15223391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_110668279762deef7081d990_15223391',
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
				<strong>Wishlist</strong>
			</li>
		</ol>		
		
		<h2>Wishlist</h2>
		<br>

		<?php echo $_smarty_tpl->tpl_vars['flash']->value;?>

		<table class="table table-bordered table-striped datatable">
			<thead>
				<tr>
					<th>No.</th>
					<th>Category</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist']->value, 'row', false, 'id');
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value->book->category['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value->book['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value->book['description'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['created'];?>
</td>
						<td>
														<button class="btn btn-green btn-md btn-icon icon-left btn-add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-book-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->book['id'];?>
"><i class="entypo-basket"></i>Add To Cart</button>
							
							<button class="btn btn-danger btn-md btn-icon icon-left btn-delete" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="entypo-cancel"></i>Delete</button>
							
							<button class="btn btn-info btn-md btn-icon icon-left btn-view" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="entypo-book-open"></i>Read More</button>
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
		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>

		<!-- View Form-->
		<div class="modal fade" id="view-wishlist">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">View Details</h4>
					</div>
					<form method="POST">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Book Cover Picture</label>
									<div class="col-sm-9">
										<img class="img-thumbnail img-responsive" src="../assets/books/default.jpg" alt="" width="200px">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Category</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="category_id" class="form-control" disabled="disabled">
												<option value="0"> -- Select Category -- </option>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'row', false, 'id');
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['row']->iteration++;
$__foreach_row_1_saved = $_smarty_tpl->tpl_vars['row'];
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
												<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
											
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
class Block_13767401962deef7082ab19_58240846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_13767401962deef7082ab19_58240846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo '<script'; ?>
 type="text/javascript">
				$.noConflict();
				jQuery( window ).load( function() {
					var table = jQuery( ".datatable" );
					
					// Initialize DataTable
					table.DataTable( {
						"sDom": "tip",
						"bStateSave": false,
						"iDisplayLength": 8,
						"aoColumns": [
							{ "bSortable": false },
							null,
							null,
							null,
							null,
							null
						],
						"bStateSave": true
					});
				} );
		<?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
>listOfWishlist = <?php echo json_encode($_smarty_tpl->tpl_vars['wishlist']->value);?>
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
					// if ( response.result ) {
						location.reload(true);
					// }
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
			function displayWishlistDataInForm( wishlistID, form ) {
				var book = listOfWishlist[ wishlistID ].book;
				// console.log( book );
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( $.inArray(name,[ 'action','picture' ]) >= 0 ) return;// exclude input hidden named 'action' and 'picture'
					// console.log( name+': '+book[name] );
					input.val( book[ name ] );
				});

				var pictureDir = '../assets/books/'+book[ 'picture' ];
				if ( !book[ 'picture' ] ) pictureDir += 'default.jpg';
				form.find( 'img' ).attr( 'src', pictureDir );

				return;
			}
			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For modal functionality
					$( '.btn-view' ).click(function(e){
							var wishlistID = $(this).data( 'id' ),
								form = $( '#view-wishlist form' );
							displayWishlistDataInForm( wishlistID, form );
							$( '#view-wishlist' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(e){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this book from your wishlist?' ) ){
							send_data_via_ajax({"wishlist_id":id,action:'delete'});
						}
						e.preventDefault();
					});

					$( '.btn-add-to-cart' ).click(function(e){
						var bookID = $(this).attr( 'data-book-id' );
						send_data_via_ajax({'action':'add_to_cart','book_id':bookID});
						// alert( 'add to cart: '+bookID );
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
