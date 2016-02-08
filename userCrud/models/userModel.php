<?php
class userModel extends Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function getUserList(){
		$sql = "SELECT * FROM user";
		$result = $this->conn->query($sql);
		return $result;
	}
	
	public function saveUser($data){
		$values = "('".$data[0]."','".$data[1]."','".$data[2]."')";
		$sql = "INSERT INTO user (userFirstName, userLastName, userEmail) VALUES".$values;
		$result = $this->conn->query($sql);
		$msg = 'User Create SuccessFully';
		if(!$result){
			$msg = mysqli_error($this->conn);
		}
		return array('status'=>$result,'msg'=>$msg);
		
	} 
	
	public function editUser($data){
		$sql = "UPDATE `user` SET `userFirstName`='".$data[1]."',`userLastName`='".$data[2]."',`userEmail`='".$data[3]."' WHERE `userID` = '".$data[0]."'";
		$result = $this->conn->query($sql);
		$msg = 'User Edit SuccessFully';
		if(!$result){
			$msg = mysqli_error($this->conn);
		}
		return array('status'=>$result,'msg'=>$msg);
		
	} 
	
	public function getUserByUserName($name){
		$sql = "SELECT * FROM `user` WHERE `userFirstName` = '".$name."'";
		$result = $this->conn->query($sql);
		return $result;
	}
	
	public function getUserByUserID($userID){
		$sql = "SELECT * FROM `user` WHERE `userID` = '".$userID."'";
		$result = $this->conn->query($sql);
		return $result;
	}
	
	public function deleteUser($userID){
		$sql = "DELETE FROM `user` WHERE `userID` = '".$userID."'";
		$result = $this->conn->query($sql);
		return $result;
	}
}
?>