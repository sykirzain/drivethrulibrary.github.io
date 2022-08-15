<?php
/* Smarty version 4.1.0, created on 2022-07-23 02:31:56
  from 'C:\xampp\htdocs\library2\app\Views\Auth\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dba3ec0ac373_72125348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b18eb9c10767174eeda0f00b3430c0bb504a22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library2\\app\\Views\\Auth\\register.tpl',
      1 => 1654690749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dba3ec0ac373_72125348 (Smarty_Internal_Template $_smarty_tpl) {
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

						<h3>Create An Account</h3>
						<form method="POST">
							<div class="form-group form-box">
								<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" required>
							</div>
							<div class="form-group form-box">
								<input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address" required>
							</div>
							<div class="row">
								<div class="col-md-6 mb-4">
									<input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone" required>
								</div>
								<div class="col-md-6 mb-4">
									<input type="text" name="matric_number" class="form-control" placeholder="Matric No." aria-label="Matric No." required>
								</div>
								
								
							</div>
														<div class="form-group form-box">
								<input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password" required>
							</div>
							<div class="form-group form-box checkbox clearfix">
								<div class="form-check checkbox-theme">
									<input class="form-check-input" type="checkbox" value="" id="termsOfService">
									<label class="form-check-label" for="termsOfService">
										I agree to the<a href="#" class="terms">terms of service</a>
									</label>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn-md btn-theme w-100">Register</button>
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
						<a href="/auth/register" class="link-btn active">Register</a>
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
