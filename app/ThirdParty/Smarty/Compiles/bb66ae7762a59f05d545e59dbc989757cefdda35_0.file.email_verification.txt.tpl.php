<?php
/* Smarty version 4.1.0, created on 2022-07-23 02:32:22
  from 'C:\xampp\htdocs\library2\app\Views\Emails\email_verification.txt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62dba406aff268_16179670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb66ae7762a59f05d545e59dbc989757cefdda35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library2\\app\\Views\\Emails\\email_verification.txt.tpl',
      1 => 1651481553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dba406aff268_16179670 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to verify your email:

<?php echo $_smarty_tpl->tpl_vars['verificationLink']->value;
}
}
