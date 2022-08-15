<?php
/* Smarty version 4.1.0, created on 2022-06-08 06:59:59
  from 'C:\xampp\htdocs\library\app\Views\Emails\email_verification.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a08f3ff2f044_90523953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c2ad9b3713cd73162f504ee706bbc39093e2d68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Emails\\email_verification.html.tpl',
      1 => 1651481537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a08f3ff2f044_90523953 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to verify your email:<br>

<?php echo $_smarty_tpl->tpl_vars['verificationLink']->value;
}
}
