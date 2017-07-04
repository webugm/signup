<?php
/*---- 必須引入----*/
require_once 'head.php';
$WEB['title'] = "首頁";


/* ------------- */
$op = isset($_REQUEST['op'])?htmlspecialchars($_REQUEST['op'], ENT_QUOTES):"";//過濾特殊符號

$smarty->assign("op", $op);
//$smarty->assign("pass", $_POST['pass']);

$page_title = "活動報名系統";
$smarty->assign('page_title', $page_title);

$content="";
/* 程式流程 */
switch ($op){
	case "login" :
		login();
		break;
	case "logout" :
		logout();
	break;
	default:
		break;	
}

$smarty->assign('content', $content);

/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);

/*---- 程式結尾-----*/
$smarty->display('theme.tpl');
/*---- 函數區-----*/
###############################
#
#
###############################
function logout(){
	$_SESSION['admin']="";
	redirect_header("index.php", 3000, '您已登出！！');

}
###############################
#
#
###############################
function login(){
	global $admin_id,$admin_pass;

	$name = isset($_POST['name'])?htmlspecialchars($_POST['name'], ENT_QUOTES):"訪客";//過濾特殊符號
	$pass = isset($_POST['pass'])?$_POST['pass']:"";

	if($admin_id == $name and $admin_pass == $pass){
		$_SESSION['admin'] = $admin_id;
		redirect_header("index.php", 3000, '登入成功！！');
	}else{
		redirect_header("index.php", 3000, '登入失敗！！');

	}
}


// $rows[0]['name']="東方不敗";
// $rows[0]['chinese']=89;
// $rows[0]['english']=60;
// $rows[0]['society']=70;

// $rows[1]['name']="楊過";
// $rows[1]['chinese']=60;
// $rows[1]['english']=80;
// $rows[1]['society']=66;

// $rows[2]['name']="小龍女";
// $rows[2]['chinese']=50;
// $rows[2]['english']=100;
// $rows[2]['society']=90;
// $smarty->assign('rows', $rows);

// $users[1]['name']="tad";
// $users[1]['birthday']="1973-06-16";
// $users[2]['name']="phebe";
// $users[2]['birthday']="1973-03-10";
// $smarty->assign('users', $users);



