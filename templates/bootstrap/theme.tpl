<{assign var=theme_name value=$WEB.theme_name}>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PHP7 研習</title>

    <!-- Bootstrap -->
    <link href="<{$xoImgUrl}>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <{* 底下這5支放在模組 class 下 *}>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<{$xoAppUrl}>class/jquery/jquery.min.js"></script>
    <script src="<{$xoAppUrl}>class/jquery/jquery-migrate-1.4.1.min.js"></script>
    <!--jQuery UI-->
    <link rel="stylesheet" href="<{$xoAppUrl}>class/jquery-ui/jquery-ui.min.css">
    <script src="<{$xoAppUrl}>class/jquery-ui/jquery-ui.min.js"></script>
    <!--Font awesome-->
    <link rel="stylesheet" href="<{$xoAppUrl}>class/font-awesome/css/font-awesome.min.css">
    

  </head>
  <body>
    <section>
      <div class="container">
        <h1 class="page-header">
          <{$page_title}>
        </h1>
        <div class="row">
          <div class="col-md-9">
            主內區
            <{$theme_name}>
          </div>

          <div class="col-md-3">
            <h2>嗨！<{$name}></h2>
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
        <h1>嗨！<{$name}></h1>
        <table class="table table-hover table-bordered">
          <{foreach $users as $user}>
            <{if $user@first}>
              <tr>
                <th>序</th>
                <th>姓名</th>
                <th>生日</th>            
              </tr>
            <{/if}>
            <tr>
              <td><{$user@index}></td>
              <td><{$user.name}></td>
              <td><{$user.birthday}></td>            
            </tr>
            <{if $user@last}>
              <tr>
                <th colspan=3>總共有：<{$user@total}>人</th>
              </tr>
            <{/if}>
          <{/foreach}>
          
        </table>
        
          
        

        
      </div>
    </section>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<{$xoImgUrl}>js/bootstrap.min.js"></script>
  </body>
</html>