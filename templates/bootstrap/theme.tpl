<{assign var=theme_name value=$WEB.theme_name}>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>    
    <{include file="tpl/head.tpl"}> 
    <{if $debug}><{debug}><{/if}>    
  </head>
  <body>
    <{include file="tpl/redirect_header.tpl"}> 
    <section>
      <div class="container">
        
        <!-- 標題 -->
        <h1 class="page-header">
          <{$page_title}>
        </h1>

        <div class="row">
         
          <!-- 主內容區 -->
          <div class="col-md-9">
            <{include file="tpl/index_main.tpl"}>
          </div>
          
          <!-- 選單區 -->
          <div class="col-md-3">
            <{if !$smarty.session.admin}>   
              <{include file="tpl/index_login.tpl"}>
            <{else}>
              <{include file="tpl/index_logout.tpl"}>
            <{/if}>
          </div>
  
        </div>
      </div>
    </section>
    

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<{$xoImgUrl}>js/bootstrap.min.js"></script>
  </body>
</html>