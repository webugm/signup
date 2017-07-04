
           
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