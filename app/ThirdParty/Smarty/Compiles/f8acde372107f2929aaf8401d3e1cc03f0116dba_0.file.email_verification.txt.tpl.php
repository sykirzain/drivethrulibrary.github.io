<?php
/* Smarty version 4.1.0, created on 2022-06-08 07:00:00
  from 'C:\xampp\htdocs\library\app\Views\Emails\email_verification.txt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a08f400fe344_05951174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8acde372107f2929aaf8401d3e1cc03f0116dba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Emails\\email_verification.txt.tpl',
      1 => 1651481553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a08f400fe344_05951174 (Smarty_Internal_Template $_smarty_tpl) {
?>Please click the following link to verify your email:

<?php echo $_smarty_tpl->tpl_vars['verificationLink']->value;
}
}
