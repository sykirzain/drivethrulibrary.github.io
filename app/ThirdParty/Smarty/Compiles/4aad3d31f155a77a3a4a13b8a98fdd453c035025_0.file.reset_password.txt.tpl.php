<?php
/* Smarty version 4.1.0, created on 2022-06-08 23:17:31
  from 'C:\xampp\htdocs\library\app\Views\Emails\reset_password.txt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a1745bd63001_35273424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aad3d31f155a77a3a4a13b8a98fdd453c035025' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Emails\\reset_password.txt.tpl',
      1 => 1651481657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1745bd63001_35273424 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to reset your password:<br>

<?php echo $_smarty_tpl->tpl_vars['resetPasswordLink']->value;
}
}
