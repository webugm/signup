<?php
/* Smarty version 3.1.29, created on 2017-07-03 20:35:24
  from "C:\UniServerZ\www\signup\templates\bootstrap\theme.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595a3a0cc5bb66_03959771',
  'file_dependency' => 
  array (
    '6ecbbfab373d82aa399e5776d729063441bd346b' => 
    array (
      0 => 'C:\\UniServerZ\\www\\signup\\templates\\bootstrap\\theme.tpl',
      1 => 1499085218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head.tpl' => 2,
  ),
),false)) {
function content_595a3a0cc5bb66_03959771 ($_smarty_tpl) {
$_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable($_smarty_tpl->tpl_vars['WEB']->value['theme_name'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'theme_name', 0);?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP7 研習</title>

    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/jquery/jquery-migrate-1.4.1.min.js"><?php echo '</script'; ?>
>
    <!--jQuery UI-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/jquery-ui/jquery-ui.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <!--Font awesome-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/font-awesome/css/font-awesome.min.css">
    

  </head>
  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tpl/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:tpl/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo @constant('WEB_PATH');?>
/templates/<?php echo $_smarty_tpl->tpl_vars['WEB']->value['theme_name'];?>
/tpl/head.tpl <br>
    <?php echo $_smarty_tpl->tpl_vars['head_tpl']->value;?>

    <section>
      <div class="container">
        <h1 class="page-header">
          <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>

        </h1>

        <div class="row">
          <div class="col-md-9">
            主內區
            <?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>

          </div>

          <div class="col-md-3">
            <h2>嗨！<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
            <div class="panel panel-primary">
              <div class="panel-heading">登入</div>
              <div class="panel-body">
                
                <form action="index.php" method="POST" role="form" class="form-horizontal">
                  
                  <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">帳號</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="name" id="name" placeholder="帳號">
                    </div>                    
                  </div> 
                  <div class="form-group">
                    <label for="pass" class="col-sm-3 control-label">密碼</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="pass" id="pass" placeholder="密碼">
                    </div>                    
                  </div>
                  <div class="text-center">
                    <button type="submit" name="op" value="login" class="btn btn-primary">登入</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section>

      <div class="container">
        <h1>嗨！<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
        <table class="table table-hover table-bordered">
          <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$__foreach_user_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->total= $__foreach_user_0_total;
$__foreach_user_0_first = true;
$_smarty_tpl->tpl_vars['user']->index=-1;
$__foreach_user_0_iteration=0;
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$_smarty_tpl->tpl_vars['user']->index++;
$__foreach_user_0_iteration++;
$_smarty_tpl->tpl_vars['user']->first = $__foreach_user_0_first;
$_smarty_tpl->tpl_vars['user']->last = $__foreach_user_0_iteration == $__foreach_user_0_total;
$__foreach_user_0_first = false;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
            <?php if ($_smarty_tpl->tpl_vars['user']->first) {?>
              <tr>
                <th>序</th>
                <th>姓名</th>
                <th>生日</th>            
              </tr>
            <?php }?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->index;?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['birthday'];?>
</td>            
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['user']->last) {?>
              <tr>
                <th colspan=3>總共有：<?php echo $_smarty_tpl->tpl_vars['user']->total;?>
人</th>
              </tr>
            <?php }?>
          <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
          
        </table>
        
          
        

        
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
