<?php
/* Smarty version 4.1.0, created on 2022-07-23 02:32:22
  from 'C:\xampp\htdocs\library2\app\Views\Emails\email_verification.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dba406af4962_22954663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d6f8948776de27590f2d612fa6bb50c8d2ecd9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library2\\app\\Views\\Emails\\email_verification.html.tpl',
      1 => 1651481537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dba406af4962_22954663 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to verify your email:<br>

<?php echo $_smarty_tpl->tpl_vars['verificationLink']->value;
}
}
