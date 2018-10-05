<?php
/**
 * Motto: Live and learn!
 * Created by Sublime Text! .
 * Author: 葛绪涛   Nickname: wordGe   QQ:690815818
 * Date: 2018/10/2 * Time: 15:33
 * Filename: test.php
 */
require_once "conn.php";
// 首先接收Ajax客户端传来的数据
//客户端使用的是post
//$userId = $_POST['geUserID'];
//过滤掉特殊字符
//防止SQL注入
//$ruler = '/\'|\\|#|"|(|)|\?|\*|\.|,|>|<|\/|;/';
//$userId=preg_replace($ruler,"",$userId);
$sqlSelect = "select * from user ";
$resultSelect = mysqli_query($conn, $sqlSelect);
if ($resultSelect) {
    $userName = '用户存在！';
    echo $sqlSelect;
} else {
    $userName = '用户不存在！';
    echo $sqlSelect;
}
