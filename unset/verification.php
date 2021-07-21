<?php

// include_once('connect.php');
// if(isset($_POST['submit'])){
//     $username=$_POST['username'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     if(!empty($username)&&!empty($email)&&!empty($password)){
//         $sql=mysql_query("select * from users");
//         while ($row=mysql_fetch_array($sql)) {
//             $user=$row['username'];
//             $eml=$row['email'];
//             if($user!=$username&&$eml!=$email){
//                 $sql2=mysql_query("insert into users(id,username,email,password)values('$username','$email','$password')");
//             }
//         }
//     }else{
//         echo"All fields required";   }
// }

// // Table Scheme for Verify Table
// CREATE TABLE `verify` (
//  `id` int(11) NOT NULL AUTO_INCREMENT,
//  `email` text NOT NULL,
//  `password` text NOT NULL,
//  `code` text NOT NULL,
//  PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1

// // Table Scheme for verified_user table
// CREATE TABLE `verified_user` (
//  `id` int(11) NOT NULL AUTO_INCREMENT,
//  `email` text NOT NULL,
//  `password` text NOT NULL,
//  PRIMARY KEY (`id`)
// ) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1

if(isset($_POST['register']))
{
	$email_id=$_POST['email'];
	$pass=$_POST['password'];
	$code=substr(md5(mt_rand()),0,15);
	mysql_connect('localhost','root','') or die('cant connect database ');
	mysql_select_db('fitness') or die('cant connect database ');
	
	$insert=mysql_query("insert into verify values('','$email','$pass','$code')");
	$db_id=mysql_insert_id();

	$message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject="Activation Code For Talkerscode.com";
    $from = 'your email';
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="verification.php">Verify.php?id='.$db_id.'&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);
	
	echo "An Activation Code Is Sent To You Check You Emails";
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id=$_GET['id'];
	$code=$_GET['id'];
	mysql_connect('localhost','root','');
	mysql_select_db('fitness');
	$select=mysql_query("select email,password from verify where id='$id' and code='$code'");
	if(mysql_num_rows($select)==1)
	{
		while($row=mysql_fetch_array($select))
		{
			$email=$row['email'];
			$password=$row['password'];
		}
		$insert_user=mysql_query("insert into verified_user values('','$email','$password')");
		$delete=mysql_query("delete from verify where id='$id' and code='$code'");
	}
}

?>