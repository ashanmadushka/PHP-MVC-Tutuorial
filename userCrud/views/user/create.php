<?php //require 'views/header.php';?>
<div>
<h3>User Create</h3>
<form class='userCreateForm' id='userCreateForm' action="">
  <div class="form-group">
    <label for="userFirstName">User First Name</label>
    <input type="text" class="form-control" id="userFirstName">
  </div>
  <div class="form-group">
    <label for="userLastName">User Last Name</label>
    <input type="text" class="form-control" id="userLastName">
  </div>
  <div class="form-group">
    <label for="userEmail">User Email address:</label>
    <input type="email" class="form-control" id="userEmail">
  </div>
  <input type="submit" class="btn btn-default" value='Submit'>
  <input type='button' class='btn btn-primary' id='back' value='Back'>
</form>
</div>
<?php //require 'views/footer.php';?>