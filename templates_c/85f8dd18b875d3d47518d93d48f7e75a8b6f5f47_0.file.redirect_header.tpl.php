<?php
/* Smarty version 3.1.30, created on 2017-07-04 13:57:53
  from "C:\UniServerZ\www\signup\templates\bootstrap\tpl\redirect_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b2e611a8806_57783818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f8dd18b875d3d47518d93d48f7e75a8b6f5f47' => 
    array (
      0 => 'C:\\UniServerZ\\www\\signup\\templates\\bootstrap\\tpl\\redirect_header.tpl',
      1 => 1499146107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b2e611a8806_57783818 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['redirect']->value) {?>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/jGrowl/jquery.jgrowl.min.css" />
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/jGrowl/jquery.jgrowl.min.js"><?php echo '</script'; ?>
>
  <!--調用插件-->        
  <?php echo '<script'; ?>
 type="text/javascript">            
    $(document).ready(function(){
      <?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>

    });                        
  <?php echo '</script'; ?>
>
<?php }
}
}
