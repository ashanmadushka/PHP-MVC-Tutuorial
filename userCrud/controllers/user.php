<?php
require 'models/userModel.php';
class user extends Controller {

	
	function __construct(){
		parent::__construct();
	}
	
	public function view(){
		$userModel = new userModel();
		$userData = $userModel->getUserList();
		$this->view->render('user/list',$userData);
	}
	
	public function createUser(){
		$this->view->render('user/create');
	}
	
	public function edit(){
		$userID = $_POST['userID'];
		$userModel = new userModel();
		$userData = $userModel->getUserByUserID($userID);
		$userData = mysqli_fetch_array($userData, MYSQLI_ASSOC);
		$this->view->render('user/edit',$userData);
	}
	
	
	
}

?>