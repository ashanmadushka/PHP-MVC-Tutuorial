<?php
require 'models/userModel.php';

class userApi {
	
	
	function __construct(){
		
	}
	
	public function saveUser(){
		
		$data =[$_POST['userFirstName'],$_POST['userLastName'],$_POST['userEmail']];
		$userModel = new userModel();
		$res = $userModel->getUserByUserName($_POST['userFirstName']);
		$count = mysqli_num_rows($res);
		$msg = '';
		$status = false;
		$msg = 'The name alredy exisit';
		if(!$count>0){
			$status = true;
			$result = $userModel->saveUser($data);
			$msg = $result['msg'];		
			if(!$result['status']){
				$status = false;			
			}
		}
		$resultArray = array(
			'status'=> $status,
			'msg'=>$msg
		);
		echo json_encode($resultArray);
	}
	
	public function editUser(){
		$userID = (int) $_POST['userID'];
		$data =[$userID,$_POST['userFirstName'],$_POST['userLastName'],$_POST['userEmail']];
		$userModel = new userModel();
		$res = $userModel->getUserByUserName($_POST['userFirstName']);
		$count = mysqli_num_rows($res);
		$result = array();
		while($resul = $res->fetch_assoc()){
			$result[$resul['userID']] = $resul;
		}
		$checkflag = true;
		if(!(isset($result[$userID]) && $result[$userID]['userFirstName'] == $_POST['userFirstName'])){
			foreach($result as $key => $val){
				if($key != $userID){
					if($val['userFirstName'] == $_POST['userFirstName'] ){
						$checkflag = false;
					}
				}
			}
		}
		$msg = '';
		$status = false;
		$msg = 'This name alredy exisit';
		if($checkflag){
			$status = true;
			$result = $userModel->editUser($data);
			$msg = $result['msg'];		
			if(!$result['status']){
				$status = false;			
			}
		}
		$resultArray = array(
			'status'=> $status,
			'msg'=>$msg
		);
		echo json_encode($resultArray);
	}
	
	public function deleteUser(){
		
		$userID = $_POST['userID'];
		$userModel = new userModel();
		$status = true;
		$msg = "user deleted successfully";
		$result = $userModel->deleteUser($userID);
		if(!$result){
			$status = false;
			$msg = "user deleted unsuccessfully";
		}
		$resultArray = array(
			'status'=> $status,
			'msg'=>$msg
		);
		echo json_encode($resultArray);
	}
}
?>