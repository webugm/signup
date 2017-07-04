<?php
/* Smarty version 3.1.30, created on 2017-07-04 14:21:43
  from "C:\UniServerZ\www\signup\templates\bootstrap\theme.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b33f7247241_56124858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d82610d5e77be22ac3951adbcf2e8197d37ad2' => 
    array (
      0 => 'C:\\UniServerZ\\www\\signup\\templates\\bootstrap\\theme.tpl',
      1 => 1499149225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head.tpl' => 1,
    'file:tpl/redirect_header.tpl' => 1,
    'file:tpl/index_main.tpl' => 1,
    'file:tpl/index_login.tpl' => 1,
    'file:tpl/index_logout.tpl' => 1,
  ),
),false)) {
function content_595b33f7247241_56124858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('theme_name', $_smarty_tpl->tpl_vars['WEB']->value['theme_name']);
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>    
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <?php if ($_smarty_tpl->tpl_vars['debug']->value) {
$_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
}?>    
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/redirect_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <section>
      <div class="container">
        
        <!-- 標題 -->
        <h1 class="page-header">
          <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>

        </h1>

        <div class="row">
         
          <!-- 主內容區 -->
          <div class="col-md-9">
            <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
          
          <!-- 選單區 -->
          <div class="col-md-3">
            <?php if (!$_SESSION['admin']) {?>   
              <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender("file:tpl/index_logout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php }?>
          </div>
  
        </div>
      </div>
    </section>
    

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
