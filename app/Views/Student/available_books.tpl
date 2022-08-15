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
				<strong>Available Books</strong>
			</li>
		</ol>		
		
		<h2>Available Books</h2>
		<br>

		<div class="form-group">
			<label class="col-sm-2 control-label">Choose Category:</label>
			<div class="col-sm-3">
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<select name="category_id" class="form-control">
						<option value=""> -- Please Choose -- </option>
						{foreach $category as $id => $row}
							<option value="{$id}">{$row.name}</option>
						{/foreach}
					</select>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="flash-message"></div>
		<table class="table table-bordered datatable">
			<thead>
				<tr>
					<th data-hide="phone">No.</th>
					<th>Name</th>
					<th data-hide="phone">Description</th>
					<th data-hide="phone,tablet">Created</th>
					<th data-hide="phone,tablet">Action</th>
				</tr>
			</thead>
			<tbody>
				{* <tr class="odd gradeX">
					<td>1</td>
					<td>Internet Explorer 4.0</td>
					<td>Win 95+</td>
					<td>Win 95+</td>
					<td class="center">
						<button class="btn btn-info btn-md btn-icon icon-left btn-view" data-id="{$id}"><i class="entypo-info"></i>Details</button>
					</td>
				</tr> *}
			</tbody>
		</table>
		<br />









		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		{include file='Elements/footer.tpl'}
	</div>

	{* Modal for CRUD functionality *}
	<!-- View Form-->
		<div class="modal fade" id="modal-view-details">
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
							<button class="btn btn-green btn-md btn-icon icon-left btn-add-to-cart" data-book-id=""><i class="entypo-basket"></i>Add To Cart</button>
							<button class="btn btn-red btn-md btn-icon icon-left btn-add-to-wishlist" data-book-id=""><i class="entypo-heart"></i>Add To Wishlist</button>
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
		{* <script src="../assets/admin/js/bootstrap.min.js"></script> *}
		<script>listOfBooks = {json_encode($books)};</script>
		{literal}
		<script>

			function send_form_via_ajax( form ) {
				var data = new FormData( form );
				send_data_via_ajax2( data );
			}
			function send_data_via_ajax( data ) {
				var modal = $( '#modal-view-details' );
				console.log( data );

				$.post( '', data,function( response ){
					console.log( response );
					var result = response.result;
					show_flash_message( result );
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
					// dataType:'text',
					success: function( response ){
						// console.log( response );
						// response = $.parseJSON( response );
						// if ( response.result ) {
							// location.reload( true );
						// }
					}
				});
			}
			function displayBookDataInForm( currentCategoryID, bookID, form ) {
				var books = listOfBooks[currentCategoryID],
					book = books[ bookID ];

				console.log( book );
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
				form.find( '.btn-add-to-cart,.btn-add-to-wishlist' ).attr( 'data-book-id', bookID );

				return;
			}
			function add_book( book, datatable ) {
				// console.log( food );
				var tr = $( '<tr>' ),
					i = datatable.rows().count();
				tr.append( '<td>'+(Number(i)+1)+'</td>' );//No.
				tr.append( '<td>'+book.name+'</td>' );//Book Name
				tr.append( '<td>'+book.description+'</td>' );//Description
				tr.append( '<td>'+book.created+'</td>' );//Created

				viewButton = '<a href="#" class="btn btn-view btn-info btn-sm btn-icon icon-left" data-id="'+book.id+'"><i class="entypo-book-open"></i> Read More</a>';
				actions = $( '<td>' )
								.append(viewButton);
				tr.append( actions );//Actions
				datatable.row.add( tr.get(0) );

				// reset_events_for_new_buttons();
			}

			function reset_events_for_new_buttons( currentCategoryID ) {
				// Reset functionality for each view details button
					$( 'table.datatable .btn-view' ).unbind().click(function(e){
						var bookID = $(this).data('id'),
							form = $( '#modal-view-details form' );
							displayBookDataInForm( currentCategoryID, bookID, form );

						$( '#modal-view-details' ).modal( 'show' );
						e.preventDefault();
					});
			}

			function add_books_into_datatable( categoryID, books, datatable ) {
				console.log( books );

				// Add list of recommended foods to datatable
					datatable.clear();
					for( var id in books ) {
						book = books[id];
						add_book( book, datatable )
					}
					datatable.draw();
				reset_events_for_new_buttons( categoryID );
			}

			function show_flash_message( result ) {
				//Set message
					var status = result.status,
						message = result.message;
					if ( status === true || status > 0) {
						message = '<div class="alert alert-success" style="display:none;">'+message+'</div>';
					} else if ( status === 0 ) {
						message = '<div class="alert alert-warning" style="display:none;">'+message+'</div>';
					} else if ( status === false || status < 0 ) {
						message = '<div class="alert alert-danger" style="display:none;">'+message+'</div>';
					}
					message = $(message);

				//Display message
					var modal = $( '#modal-view-details' );
						$( '.flash-message' ).prepend( message );
						message.fadeIn( 'slow',function() {
							setTimeout(function(){
								message.fadeOut( 'slow', function() {
									$(this).remove();
								});
							}, 3000 );
						});
					modal.modal( 'hide' );
			}

			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For choose-category functionality
					$( 'select[name=category_id]' ).change(function(){
						var categoryID = $(this).val(),
							books = listOfBooks[categoryID];
						// Display all of the books that is related to current category into datatable
							add_books_into_datatable( categoryID, books, datatable );
					});

				// For AJAX functionality
					$( '.btn-add-to-cart' ).click(function(e){
						var bookID = $(this).attr( 'data-book-id' );
						send_data_via_ajax({'action':'add-to-cart','book_id':bookID});
						// alert( 'add to cart: '+bookID );
						e.preventDefault();
					});
					$( '.btn-add-to-wishlist' ).click(function(e){
						var bookID = $(this).attr( 'data-book-id' );
						send_data_via_ajax({'action':'add-to-wishlist','book_id':bookID});
						e.preventDefault();
					});
			}); //-------------------------------------------------------------------------------------------------------------------
		</script>
		{/literal}
{/block}