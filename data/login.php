<?php
header("Content-Type:application/json;charset=utf-8");
$conn=mysqli_connect('127.0.0.1','root','','njt',3306);
mysqli_query($conn,"charset=UTF8");
@$uname=$_REQUEST['uname'];
@$upwd=$_REQUEST['upwd'];
$sql="select * from ntj_user where uname='$uname' and upwd='$upwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row==null){
    echo '{"code":-1,"msg":"用户名密码不正确"}';
}else{
    echo '{"code":1,"msg":"登录成功"}';
}