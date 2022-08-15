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
				<strong>List of Books</strong>
			</li>
		</ol>		
		
		<h2>List of Books</h2>
		<br>

		{$flash}
		<table class="table table-bordered table-striped datatable">
			<thead>
				<tr>
					<th>No.</th>
					<th>Category</th>
					<th>Name</th>
					<th>Description</th>
					<th>Total</th>
					<th>Created</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				{foreach $books as $id => $row}
					<tr>
						<td>{$row@iteration}</td>
						<td>{$row->category.name}</td>
						<td>{$row.name}</td>
						<td>{$row.description}</td>
						<td>{$row.total}</td>
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
		
		<a href="" class="btn btn-primary btn-add">
			<i class="entypo-plus"></i> Add New Book
		</a>
		
		
		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		{include file='Elements/footer.tpl'}
	</div>

	{* Modal for CRUD functionality *}
	<!-- Add Form-->
		<div class="modal fade" id="add-book">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Add New Book</h4>
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
									<label class="col-sm-3 control-label">Category</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="category_id" class="form-control">
												<option value="0"> -- Select Category -- </option>
												{foreach $categories as $id => $row}
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
	<!-- Edit Form-->
		<div class="modal fade" id="edit-book">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Book</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="id" value="">
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
									<label class="col-sm-3 control-label">Category</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="category_id" class="form-control">
												<option value="0"> -- Select Category -- </option>
												{foreach $categories as $id => $row}
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
		<div class="modal fade" id="view-book">
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
									<label class="col-sm-3 control-label">Category</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<select name="category_id" class="form-control" disabled="disabled">
												<option value="0"> -- Select Category -- </option>
												{foreach $categories as $id => $row}
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
		<script>listOfBooks = {json_encode($books)};</script>
		{literal}
		<script>
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
			function displayBookDataInForm( bookID, form ) {
				var book = listOfBooks[ bookID ];
				console.log( book );
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( $.inArray(name,[ 'action','picture' ]) >= 0 ) return;// exclude input hidden named 'action' and 'picture'
					console.log( name+': '+book[name] );
					input.val( book[ name ] );
				});

				var pictureDir = '../assets/books/'+book[ 'picture' ];
				if ( !book[ 'picture' ] ) pictureDir += 'default.jpg';
				form.find( 'img' ).attr( 'src', pictureDir );

				return;
			}
			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For modal functionality
					$( '.btn-add' ).click(function(e){
							$( '#add-book' ).modal( 'show' );
						e.preventDefault();
					});
					$( '.btn-edit' ).click(function(e){
							var bookID = $(this).data( 'id' ),
								form = $( '#edit-book form' );
							displayBookDataInForm( bookID, form );

							$( '#edit-book' ).modal( 'show' );
						e.preventDefault();
					});
					
					$( '.btn-view' ).click(function(e){
							var bookID = $(this).data( 'id' ),
								form = $( '#view-book form' );
							displayBookDataInForm( bookID, form );
							$( '#view-book' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(e){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this book?' ) ){
							console.log( id );
							send_data_via_ajax({id:id,action:'delete'});
						}
						e.preventDefault();
					});
					$( '#add-book, #edit-book' ).find( 'form' ).submit(function(e){
						send_form_via_ajax( this );
						e.preventDefault();
					});
			}); //-------------------------------------------------------------------------------------------------------------------
		</script>
		{/literal}
{/block}