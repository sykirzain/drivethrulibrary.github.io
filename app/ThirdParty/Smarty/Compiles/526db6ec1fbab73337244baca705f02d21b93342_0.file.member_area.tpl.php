<?php
/* Smarty version 4.1.0, created on 2022-06-08 12:07:48
  from 'C:\xampp\htdocs\library\app\Views\Layouts\member_area.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a0d7641e70a8_69304155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526db6ec1fbab73337244baca705f02d21b93342' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Layouts\\member_area.tpl',
      1 => 1654708042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/sidebar.tpl' => 1,
  ),
),false)) {
function content_62a0d7641e70a8_69304155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<link rel="icon" href="/assets/member/images/favicon.ico">

	<title>Drive-thru Library System</title>

	<link rel="stylesheet" href="/assets/member/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/assets/member/css/font-icons/entypo/css/entypo.css">
		<link rel="stylesheet" href="/assets/member/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/member/css/neon-core.css">
	<link rel="stylesheet" href="/assets/member/css/neon-theme.css">
	<link rel="stylesheet" href="/assets/member/css/neon-forms.css">
	<link rel="stylesheet" href="/assets/member/css/custom.css">

	<?php echo '<script'; ?>
 src="/assets/member/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>

	<!--[if lt IE 9]><?php echo '<script'; ?>
 src="/assets/member/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->


</head>
<body class="page-body  page-left-in">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	








	<?php $_smarty_tpl->_subTemplateRender('file:Elements/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125081962762a0d7641df3a3_99688505', 'body');
?>










	
		
	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	
	
			<div class="chat-group" id="group-1">
				<strong>Favorites</strong>
	
				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
			</div>
	
	
			<div class="chat-group" id="group-2">
				<strong>Work</strong>
	
				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
			</div>
	
	
			<div class="chat-group" id="group-3">
				<strong>Social</strong>
	
				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
			</div>
	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		<li>
			<span class="user">Art Ramadani</span>
			<p>Are you here?</p>
			<span class="time">09:00</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>This message is pre-queued.</p>
			<span class="time">09:25</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>Whohoo!</p>
			<span class="time">09:26</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Catherine J. Watkins</span>
			<p>Do you like it?</p>
			<span class="time">09:27</span>
		</li>
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>I am going out.</p>
			<span class="time">08:21</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>Call me when you see this message.</p>
			<span class="time">08:27</span>
		</li>
	</ul>

	
</div>

	<!-- Sample Modal (Default skin) -->
	<div class="modal fade" id="sample-modal-dialog-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Default Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin inverted) -->
	<div class="modal invert fade" id="sample-modal-dialog-2">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin gray) -->
	<div class="modal gray fade" id="sample-modal-dialog-3">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/assets/member/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/assets/member/js/rickshaw/rickshaw.min.css">

	<link rel="stylesheet" href="/assets/member/js/datatables/datatables.css">
	<link rel="stylesheet" href="/assets/member/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="/assets/member/js/select2/select2.css">



	<!-- Bottom scripts (common) -->
	<?php echo '<script'; ?>
 src="/assets/member/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/gsap/TweenMax.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/member/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/member/js/joinable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/resizeable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/neon-api.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>


	<!-- Imported scripts on this page -->


	<?php echo '<script'; ?>
 src="/assets/member/js/jvectormap/jquery-jvectormap-europe-merc-en.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/rickshaw/vendor/d3.v3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/rickshaw/rickshaw.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/raphael-min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/morris.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/toastr.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="/assets/member/js/datatables/datatables.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/assets/member/js/select2/select2.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="/assets/member/js/neon-chat.js"><?php echo '</script'; ?>
>


	<!-- JavaScripts initializations and stuff -->
	<?php echo '<script'; ?>
 src="/assets/member/js/neon-custom.js"><?php echo '</script'; ?>
>


	<!-- Demo Settings -->
	<?php echo '<script'; ?>
 src="/assets/member/js/neon-demo.js"><?php echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173600518362a0d7641e3229_22809421', 'scripts');
?>

</body>
</html><?php }
/* {block 'body'} */
class Block_125081962762a0d7641df3a3_99688505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_125081962762a0d7641df3a3_99688505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'scripts'} */
class Block_173600518362a0d7641e3229_22809421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_173600518362a0d7641e3229_22809421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
