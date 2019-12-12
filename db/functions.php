<?php
	require_once('db.php');

	function validate($id, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$id}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}


	function register($id, $password,$name, $email,$usertype){
		$conn = getConnection();
		$sql = "insert into users values('', '{$id}','{$password}', '{$name}','{$email}','{$usertype}' )";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>