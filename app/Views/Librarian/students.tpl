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
				<strong>Students</strong>
			</li>
		</ol>		
		
		<h2>Students</h2>
		<br>
		

		{$flash}
		<table class="table table-bordered table-striped datatable">
			<thead>
				<tr>
					<th>No.</th>
					<th>Username</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>Matric No.</th>
					<th>Verified</th>
					<th>Created</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				{foreach $students as $id => $row }
					{$verified = [
									"<div class='label label-danger'>No</div>",
									"<div class='label label-success'>Yes</div>"
									]}
					<tr>
						<td>{$row@iteration}</td>
						<td>{$row.username}</td>
						<td>{$row.email}</td>
						<td>{$row.phone|default:'-'}</td>
						<td>{$row.matric_number}</td>
						<td>{$verified.{$row.verified}}</td>
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
		
		<a href="?action=create" class="btn btn-primary btn-add">
			<i class="entypo-plus"></i>
			Add New Students
		</a>
		
		
		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		{include file='Elements/footer.tpl'}
	</div>
	{* Modal for CRUD functionality *}
	<!-- Add Form-->
		<div class="modal fade" id="add-student">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Add New Student</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="add">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="username" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Email Address</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="email" type="email" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="phone" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Matric No.</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="matric_number" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="password" type="password" class="form-control">
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
		<div class="modal fade" id="edit-student">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Student</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="id" value="">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="username" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Email Address</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="email" type="email" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="phone" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Matric No.</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="matric_number" type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="password" type="password" class="form-control">
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
		<div class="modal fade" id="view-student">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">View Student</h4>
					</div>
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="action" value="add">
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="username" type="text" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Email Address</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="email" type="email" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="phone" type="text" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Matric No.</label>
									<div class="col-sm-9">
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input name="matric_number" type="text" class="form-control" readonly>
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
		<script>listOfStudents = {json_encode($students)};</script>
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
			function displayStudentDataInForm( userID, form ) {
				var student = listOfStudents[ userID ];
				console.log( student );
				form.find( 'input,select' ).each(function(){
					var input = $(this),
						name = input.attr( 'name' );
						if ( $.inArray(name,[ 'action','picture' ]) >= 0 ) return;// exclude input hidden named 'action' and 'picture'
					console.log( name+': '+student[name] );
					input.val( student[ name ] );
				});

				return;
			}
			$(document).ready(function(){ //----------------------------------------------------------------------------------------
				// For modal functionality
					$( '.btn-add' ).click(function(e){
							$( '#add-student' ).modal( 'show' );
						e.preventDefault();
					});
					$( '.btn-edit' ).click(function(e){
							var userID = $(this).data( 'id' ),
								form = $( '#edit-student form' );
							displayStudentDataInForm( userID, form );

							$( '#edit-student' ).modal( 'show' );
						e.preventDefault();
					});
					
					$( '.btn-view' ).click(function(e){
							var userID = $(this).data( 'id' ),
								form = $( '#view-student form' );
							displayStudentDataInForm( userID, form );
							$( '#view-student' ).modal( 'show' );
						e.preventDefault();
					});

				// For AJAX functionality
					$( '.btn-delete' ).click(function(e){
						var id = $(this).data( 'id' );
						if( confirm( 'Are you sure want to delete this student data?' ) ){
							console.log( id );
							send_data_via_ajax({id:id,action:'delete'});
						}
						e.preventDefault();
					});
					$( '#add-student, #edit-student' ).find( 'form' ).submit(function(e){
						send_form_via_ajax( this );
						e.preventDefault();
					});
			}); //-------------------------------------------------------------------------------------------------------------------
		</script>
		{/literal}
{/block}