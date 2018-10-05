<?php
/**
 * Motto: Live and learn!
 * Created by Sublime Text! .
 * Author: 葛绪涛   Nickname: wordGe   QQ:690815818
 * Date: 2018/10/2 * Time: 14:32
 * Filename: ajaxResult.php
 */
//如果 是Ajax提交的数据，由php来做处理，返回的数据是 json
header('Content-type:text/json;charset=utf-8');

//连接数据库
require_once "conn.php";
// 首先接收Ajax客户端传来的数据
//客户端使用的是post
$userId = $_POST['geUserID'];
//过滤掉特殊字符
//防止SQL注入
$ruler = '/\'|\\|#|"|(|)|\?|\*|\.|,|>|<|\/|;/';
$userId=preg_replace($ruler,"",$userId);
$sqlSelect = "select name,userid from user where userid='{$userId}'";
$resultSelect = mysqli_query($conn, $sqlSelect);
if ($resultSelect) {
    $resultAffectedNumber = mysqli_num_rows($resultSelect);
//表中的userId应该是就一条记录，
    if ($resultAffectedNumber == 1) {
//    这是存在的处理过程
        unset($selectAssoc);
        while ($thread = mysqli_fetch_assoc($resultSelect)) {
            $selectAssoc[] = $thread;
        }
        foreach ($selectAssoc as $row) {
            $userName = $row['name'];
            $userName='用户名：'.$userName.'&nbsp; ';
        }
    } else {
//    这是处理不存在的过程
        if ($resultAffectedNumber > 1){
            $userName = '此用户编号存在多个，有点乱！';
        }else{
            $userName = '用户不存在！';
        }
    }
} else {
    $userName = '用户不存在！';
}
//$data='{title:"' . $title . '",content:"' . $content .'"}';//组合成json格式数据
$data = '{userName:"' . $userName . '"}';
echo json_encode($data);//输出json数据
//关闭数据连接
mysqli_close($conn);
die('');