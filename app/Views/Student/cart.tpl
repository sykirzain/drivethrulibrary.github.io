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
				<strong>Cart</strong>
			</li>
		</ol>		
		
		<h2>Cart</h2>
		<br>

		{$flash}
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
				{foreach $cartItems as $id => $row}
					<tr>
						<td>{$row@iteration}</td>
						<td>{$row->book->category.name}</td>
						<td>{$row->book.name}</td>
						<td>{$row->book.description}</td>
						<td>{$row.created}</td>
						<td>
							<button class="btn btn-danger btn-md btn-icon icon-left btn-delete" data-id="{$id}"><i class="entypo-cancel"></i>Delete</button>
							<button class="btn btn-info btn-md btn-icon icon-left btn-view" data-id="{$id}"><i class="entypo-book-open"></i>Read More</button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>

		{if count($cartItems)}
			<br />
			<button class="btn btn-primary btn-md btn-icon icon-left btn-borrow"><i class="entypo-basket"></i>Borrow</button>
		{/if}
		
		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		{include file='Elements/footer.tpl'}
	</div>

	{* Modal for CRUD functionality *}
	<!-- View Form-->
		<div class="modal fade" id="view-cart-item">
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
												{foreach $category as $id => $row}
													<option value="{$id}">{$row.name}</option>
												{/foreach}
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
{/block}
{block name=scripts}
		<script type="text/javascript">
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
		</script>
		{* <script src="../assets/admin/js/bootstrap.min.js"></script> *}
		<script>listOfCartItems = {json_encode($cartItems)};</script>
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
			function displayCartItemsDataInForm( cartItemID, form ) {
				var book = listOfCartItems[ cartItemID ].book;
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
							var cartItemID = $(this).data( 'id' ),
								form = $( '#view-cart-item form' );
							displayCartItemsDataInForm( cartItemID, form );
							$( '#view-cart-item' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(e){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this book from your cart?' ) ){
							send_data_via_ajax({'cart_item_id':id,action:'delete'});
						}
						e.preventDefault();
					});

					$( '.btn-borrow' ).click(function(e){
							send_data_via_ajax({action:'borrow'});
						e.preventDefault();
					});
			}); //-------------------------------------------------------------------------------------------------------------------
		</script>
		{/literal}
{/block}