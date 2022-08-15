<?php
/* Smarty version 4.1.0, created on 2022-07-09 20:38:06
  from 'C:\xampp\htdocs\library\app\Views\Elements\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62ca2d7e1f7447_20832849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4bf921548e1bb5e643f95e2e1307fc2a439c661' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Elements\\sidebar.tpl',
      1 => 1657417080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ca2d7e1f7447_20832849 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['user']->value['role'] == '0') {?> 	<?php $_smarty_tpl->_assignInScope('active', array('dashboard'=>'','available_books'=>'','cart'=>'','wishlist'=>''));
} elseif ($_smarty_tpl->tpl_vars['user']->value['role'] == '1') {?> 	<?php $_smarty_tpl->_assignInScope('active', array('dashboard'=>'','reservation'=>'','categories'=>'','list_of_books'=>'','students'=>''));
}
$_tmp_array = isset($_smarty_tpl->tpl_vars['active']) ? $_smarty_tpl->tpl_vars['active']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['method']->value] = 'active opened';
$_smarty_tpl->_assignInScope('active', $_tmp_array);?>




	<div class="sidebar-menu">
		<div class="sidebar-menu-inner">
			<header class="logo-env">
				<!-- logo -->
				<div class="logo">
					<a href="#">
						<!-- <img src="/assets/member/images/logo@2x.png" width="120" alt="" /> -->
						<img src="/assets/auth/drive-thru-library.png" style="border-radius: 10%; padding: 10px; background-color: white; height: 150px; width: auto;" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<!-- <li class="active opened active has-sub"> -->
									<?php if ($_smarty_tpl->tpl_vars['user']->value['role'] == '1') {?> 
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['dashboard'];?>
">
							<a href="/librarian/dashboard">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['reservation'];?>
">
							<a href="/librarian/reservation">
								<i class="entypo-archive"></i>
								<span class="title">Reservation</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['categories'];?>
">
							<a href="/librarian/categories">
								<i class="entypo-archive"></i>
								<span class="title">Categories</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['list_of_books'];?>
">
							<a href="/librarian/list_of_books">
								<i class="entypo-archive"></i>
								<span class="title">List of Books</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['students'];?>
">
							<a href="/librarian/students">
								<i class="entypo-archive"></i>
								<span class="title">Students</span>
							</a>
						</li>
									<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['role'] == '0') {?>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['dashboard'];?>
">
							<a href="/student/dashboard">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['available_books'];?>
">
							<a href="/student/available_books">
								<i class="entypo-book"></i>
								<span class="title">Available Books</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['cart'];?>
">
							<a href="/student/cart">
								<i class="entypo-basket"></i>
								<span class="title">Cart</span>
							</a>
						</li>
						<li class="<?php echo $_smarty_tpl->tpl_vars['active']->value['wishlist'];?>
">
							<a href="/student/wishlist">
								<i class="entypo-heart"></i>
								<span class="title">Wishlist</span>
							</a>
						</li>
					<?php }?>
			</ul>
		</div>
	</div><?php }
}
