<?php
/* Smarty version 4.1.0, created on 2022-06-08 07:19:39
  from 'C:\xampp\htdocs\library\app\Views\Auth\forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a093dbb51fb1_03295325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0393231f11b6a71e4a8804426dccc527ffcb5976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Auth\\forgot_password.tpl',
      1 => 1654628023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a093dbb51fb1_03295325 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Drive-thru Library System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<!-- External CSS libraries -->
	<link type="text/css" rel="stylesheet" href="/assets/auth/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="/assets/auth/fonts/font-awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="/assets/auth/fonts/flaticon/font/flaticon.css">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="/assets/auth/img/favicon.ico" type="image/x-icon" >

	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Custom Stylesheet -->
	<link type="text/css" rel="stylesheet" href="/assets/auth/css/style.css">

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 22 start -->
<div class="login-22 tab-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-12 form-section">
				<div class="login-inner-form">
					<div class="details">
						<a href="/auth/login" title="Drive-Thru Library System">
							<img src="/assets/auth/img/logos/drive-thru-library.png" alt="Drive-Thru Library System">
						</a>
						<?php echo $_smarty_tpl->tpl_vars['flash']->value;?>

						<h3>Recover Your Password</h3>
						<form method="POST">
							<div class="form-group form-box">
								<input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
							</div>
							<div class="form-group">
								<button type="submit" class="btn-md btn-theme w-100">Login</button>
							</div>
							<p>Already a member?<a href="/auth/login"> Login here</a></p>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 bg-img">
				<div class="informeson">
					<div class="btn-section">
						<a href="/auth/login" class="link-btn">Login</a>
						<a href="/auth/register" class="link-btn">Register</a>
					</div>
					<h1>WELCOME TO <span>UiTM JASIN</span></h1>
					<p>A platform that helps you find your perfect bookish opinion that cover overs thousands of books that you need at the tip of your finger.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login 22 end -->

<!-- External JS libraries -->
<?php echo '<script'; ?>
 src="/assets/auth/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/auth/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/auth/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/auth/js/app.js"><?php echo '</script'; ?>
>
<!-- Custom JS Script -->
</body>
</html>
<?php }
}
