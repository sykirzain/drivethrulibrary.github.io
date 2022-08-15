<?php
/* Smarty version 4.1.0, created on 2022-07-23 02:31:40
  from 'C:\xampp\htdocs\library2\app\Views\Librarian\students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dba3dc5970f8_99462651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21982d19669f6f0aed1d90a50a345232e311019e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library2\\app\\Views\\Librarian\\students.tpl',
      1 => 1657439234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
    'file:Elements/footer.tpl' => 1,
  ),
),false)) {
function content_62dba3dc5970f8_99462651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35776862662dba3dc582f87_80581409', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177654475262dba3dc5961f9_57550055', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_35776862662dba3dc582f87_80581409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_35776862662dba3dc582f87_80581409',
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
				<strong>Students</strong>
			</li>
		</ol>		
		
		<h2>Students</h2>
		<br>
		

		<?php echo $_smarty_tpl->tpl_vars['flash']->value;?>

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
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'row', false, 'id');
$_smarty_tpl->tpl_vars['row']->iteration = 0;
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
$_smarty_tpl->tpl_vars['row']->iteration++;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars['row'];
?>
					<?php $_smarty_tpl->_assignInScope('verified', array("<div class='label label-danger'>No</div>","<div class='label label-success'>Yes</div>"));?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
						<td><?php echo (($tmp = $_smarty_tpl->tpl_vars['row']->value['phone'] ?? null)===null||$tmp==='' ? '-' ?? null : $tmp);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['matric_number'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['verified']->value[$_smarty_tpl->tpl_vars['row']->value['verified']];?>
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
		
		<a href="?action=create" class="btn btn-primary btn-add">
			<i class="entypo-plus"></i>
			Add New Students
		</a>
		
		
		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
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
<?php
}
}
/* {/block 'body'} */
/* {block 'scripts'} */
class Block_177654475262dba3dc5961f9_57550055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_177654475262dba3dc5961f9_57550055',
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
>listOfStudents = <?php echo json_encode($_smarty_tpl->tpl_vars['students']->value);?>
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
		<?php echo '</script'; ?>
>
		
<?php
}
}
/* {/block 'scripts'} */
}
