<?php
    header("Content-type: text/html; charset=gbk");
    $ljsql=@mysql_connect("localhost","xhkj5","2030016184drx");//php�ĳ����Լ��ľͿ����ˡ�
    $db=@mysql_select_db("xhkj5");//�Լ��Ŀ�

$name=@$_GET['name'];
if($name==""){
    echo "1";//�ʺ�Ϊ�շ���1
    return;
}
$cxzh="SELECT * FROM `pre_ucenter_members` WHERE `username` = '".$name."'";
$cx=mysql_query($cxzh);
$du=mysql_fetch_array($cx);
if($du['uid']==""){
    echo "3";//�ʺŲ�����
    return;
}else{
    echo $du['uid'];
}
?>