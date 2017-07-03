<?php
/*---- 必須引入----*/
require_once 'head.php';
$WEB['title'] = "首頁";
#程式流程



$name = "Ugm";
$smarty->assign("name", $name);

$page_title = "活動報名系統";
$smarty->assign('page_title', $page_title);

$users[1]['name']="tad";
$users[1]['birthday']="1973-06-16";
$users[2]['name']="phebe";
$users[2]['birthday']="1973-03-10";
$smarty->assign('users', $users);

/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);

/*---- 程式結尾-----*/
$smarty->display('theme.tpl');
/*---- 函數區-----*/
