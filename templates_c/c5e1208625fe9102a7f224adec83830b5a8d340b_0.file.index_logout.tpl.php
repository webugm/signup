<?php
/* Smarty version 3.1.30, created on 2017-07-04 14:22:36
  from "C:\UniServerZ\www\signup\templates\bootstrap\tpl\index_logout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b342c4c7213_04093340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e1208625fe9102a7f224adec83830b5a8d340b' => 
    array (
      0 => 'C:\\UniServerZ\\www\\signup\\templates\\bootstrap\\tpl\\index_logout.tpl',
      1 => 1499149351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b342c4c7213_04093340 (Smarty_Internal_Template $_smarty_tpl) {
?>
 
<h2>嗨！<?php echo $_SESSION['admin'];?>
</h2>

<!-- Indicates a dangerous or potentially negative action -->
<a class="btn btn-danger" href="index.php?op=logout">登出</a><?php }
}
