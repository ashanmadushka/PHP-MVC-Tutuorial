<?php //require 'views/header.php';?>
<div>
<h3>User Edit</h3>
<form class='userEditForm' id='userEditForm' action="">
	<input type='hidden' id='userID' value='<?php echo $data['userID']?>'>
  <div class="form-group">
    <label for="userFirstName">User First Name</label>
    <input type="text" class="form-control" value='<?php echo $data['userFirstName']?>' id="userFirstName">
  </div>
  <div class="form-group">
    <label for="userLastName">User Last Name</label>
    <input type="text" class="form-control" value='<?php echo $data['userLastName']?>' id="userLastName">
  </div>
  <div class="form-group">
    <label for="userEmail">User Email address:</label>
    <input type="email" class="form-control" value='<?php echo $data['userEmail']?>' id="userEmail">
  </div>
  <input type="submit" class="btn btn-default" value='Submit'>
  <input type='button' class='btn btn-primary' id='back' value='Back'>
</form>
</div>
<?php //require 'views/footer.php';?>