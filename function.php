<?php
###############################################################################
#  轉向函數
###############################################################################
function redirect_header($url = "", $time = 3000, $message = '已轉向！！') {
  $_SESSION['redirect'] = "\$.jGrowl('{$message}', {  life:{$time} , position: 'center', speed: 'slow' });";
  header("location:{$url}");
  exit;
}
###############################################################################
#  取得目前網址
###############################################################################
if (!function_exists("getCurrentUrl")) {
  function getCurrentUrl() {
    global $_SERVER;
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
    $host = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $params = $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : "";
 
    $currentUrl = $protocol . '://' . $host . $script . $params;
    return $currentUrl;
  }
}
 
###############################################################################
#  獲得填報者ip
###############################################################################
if (!function_exists("getVisitorsAddr")) {
  function getVisitorsAddr() {
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
      $ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
      $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
      $ip = $_SERVER["REMOTE_ADDR"];
    }
    return $ip;
  }
}

#####################################################################################
#  建立目錄
#####################################################################################
if (!function_exists("mk_dir")) {
  function mk_dir($dir = "") {
    #若無目錄名稱秀出警告訊息
    if (empty($dir)) {
      return;
    }
 
    #若目錄不存在的話建立目錄
    if (!is_dir($dir)) {
      umask(000);
      //若建立失敗秀出警告訊息
      mkdir($dir, 0777);
    }
  }
}

#####################################################################################
#  取得系統變數值
#  get_system_var($kind,$name,$key);
#  (資料表,類別,欄名,資料庫欄名)#
#  給前台使用，只撈 enable=1
#####################################################################################
function get_system_var($kind = "", $name = "", $key = "value") {
  global $mysqli;
  if (empty($kind) or empty($name)) {
    return;
  }
  $sql = "select `{$key}`
    from `creative_system`
    where `kind`='{$kind}' and `name`='{$name}' and enable='1'"; //die($sql);
  $result = $mysqli->query($sql) or redirect_header("index.php", 3, "取得系統變數發生錯誤！！");
  list($value) = $result->fetch_row();
  return $value;
}


#################################
# 選單列表程式
#
#################################
function nav_home() {
  global $mysqli, $smarty;
 
  #取得所有記錄
  $sql = "select sn,title,url,target 
        from `creative_nav`
          where `kind`='nav_home' and `enable`='1' 
          order by `sort` "; //die($sql);
 
  $result = $mysqli->query($sql) or die(printf("Error: %s <br>" . $sql, $mysqli->sqlstate));
 
  $rows = array();
  while ($row = $result->fetch_assoc()) {
    #過濾撈出資料
    
    //Array ( [sn] => 3 [ofsn] => 0 [kind] => nav_home [title] => asdfasdf [sort] => 0 [enable] => 1 [url] => asdfasdf [target] => 0 [col_sn] => 0 [content] => )
    $row['sn'] = intval($row['sn']);
    //http://www.w3school.com.cn/php/func_string_htmlspecialchars.asp
    $row['title'] = htmlspecialchars($row['title'], ENT_QUOTES); // 轉換雙引號和單引號
    $row['url'] = htmlspecialchars($row['url'], ENT_QUOTES); // 轉換雙引號和單引號
    $row['target'] = intval($row['target']);
 
    $rows[] = $row;
  }
  //print_r($rows);die();

  $smarty->assign("rows", $rows);
  return;
}