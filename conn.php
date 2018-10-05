<?php
/**
 * Motto: Live and learn!
 * Created by Sublime Text! .
 * Author: 葛绪涛   Nickname: wordGe   QQ:690815818
 * Date: 2018/10/2 * Time: 6:29
 * Filename: conn.php
 */
//连接数据库
$conn=mysqli_connect("localhost","root","GE@126.com","test") or die("数据库连接失败！".mysqli_error());
//设置查询的数据库的字体
mysqli_query($conn,"set names utf8");
//设置时区
date_default_timezone_set("PRC");
//
//1.die()函数：表示向用户输出引号中的内容后，程序终止运行，提示定制的出错信息
//ex:
//$conn = mysqli_connect("localhost", "root", "","zhym_02") or die("连接数据库服务器失败！".mysqli_error());
// 
//2.mysqli_connnect()函数：连接MySQL服务器
//ex:   $conn = mysqli_connect(“localhost”,”root”,””); 
//     $conn = mysql_select_db($conn, “zhym_01”);
//或
//          $conn = mysqli_connect("localhost", "root", "","zhym_02");
// 
//3.mysqli_select_db()函数：选择MySQL数据库
//ex:
// $select = mysqli_select_db($conn, "zhym_01");
// 
//4.mysqli_query()函数：执行SQL语句，设置编码格式
//ex:
//mysqli_query($conn, "set names gb2312");        //设置编码格式
//$result = mysqli_query($conn, "select * from tb_user");
// 
//5.mysqli_fetch_array()函数：从结果集中获取一行作为枚举数组
//ex: $result = mysqli_fetch_array($arr,MYSQL_ASSOC)
//6.mysqli_num_rows()函数：获取查询结果集中的记录数
//ex:
//while ($row=mysqli_fetch_row($result)){printf ("%s (%s)n",$row[0],$row[1]);}
//7.mysqli_free_result()函数：释放内存
//ex: mysqli_free_result($result);
//
