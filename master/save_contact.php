<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('katalog_laptop');
if($_POST['action']=='save'){
//validasi data
$fname=$_POST['first_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
settype($fname,'string');
settype($message,'string');
//validasi email;
if(!preg_match('/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',$email)){
echo 'Ivalid Email Address'; exit();
}
//validasi phone
if(!preg_match('/^[0-9]+$/',$phone)){
echo 'Invalid phone number'; exit();
}
//saving data
$time=date ("Y-m-d H:i:s");
$query="INSERT INTO contact (first_name,email,phone,message,time) VALUES ('$fname','$email','$phone','$message','$time')";
$hasil=mysql_query($query);
if($hasil){
	echo '<font color="green">DATA HAS BEEN SAVED</font>';
}else {
	echo '<font color="red">Error, CON NOT SAVE DATA</font>';
}
}
?>