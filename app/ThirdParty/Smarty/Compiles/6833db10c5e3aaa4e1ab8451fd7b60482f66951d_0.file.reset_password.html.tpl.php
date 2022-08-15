<?php
/* Smarty version 4.1.0, created on 2022-06-08 23:17:31
  from 'C:\xampp\htdocs\library\app\Views\Emails\reset_password.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a1745bc78a08_41915823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6833db10c5e3aaa4e1ab8451fd7b60482f66951d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Emails\\reset_password.html.tpl',
      1 => 1651481589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1745bc78a08_41915823 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to reset your password:<br>


<?php echo $_smarty_tpl->tpl_vars['resetPasswordLink']->value;
}
}
