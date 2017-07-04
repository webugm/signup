<?php
/* Smarty version 3.1.30, created on 2017-07-04 14:19:06
  from "C:\UniServerZ\www\signup\templates\bootstrap\tpl\index_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b335a6b9161_19820348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2735b85581df3905b86d6371b0769404400fb9a3' => 
    array (
      0 => 'C:\\UniServerZ\\www\\signup\\templates\\bootstrap\\tpl\\index_login.tpl',
      1 => 1499148946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b335a6b9161_19820348 (Smarty_Internal_Template $_smarty_tpl) {
?>

           
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
            </div><?php }
}
