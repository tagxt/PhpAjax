<?php
/**
 * Motto: Live and learn!
 * Created by Sublime Text! .
 * Author: 葛绪涛   Nickname: wordGe   QQ:690815818
 * Date: 2018/10/2 * Time: 6:42
 * Filename: 1.php
 */
//如果 是Ajax提交的数据，由php来做处理，返回的数据是 json
header('Content-type:text/json;charset=utf-8');
$title=$_POST['title'];
$content=$_POST['content'].'json';
$title=$title."ABC";

$data='{title:"' . $title . '",content:"' . $content .'"}';//组合成json格式数据
echo json_encode($data);//输出json数据

