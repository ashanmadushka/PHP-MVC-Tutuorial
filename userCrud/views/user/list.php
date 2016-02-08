<?php require 'views/header.php';?>
<div>
<div><input type='button' class='btn btn-primary' id='createUser' value='Create User'></div>
</br >
<div class='userCreateView' id='userCreateView'>
</div>
</br >
<table class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($data as $val){?>
		 <tr id='<?php echo $val['userID']?>'>
		 <td><?php echo $val['userFirstName'];?></td>
		 <td><?php echo $val['userLastName'];?></td>
		 <td><?php echo $val['userEmail'];?></td>
		 <td><a class="edit"><i class="glyphicon glyphicon-edit"></i></a></td>
		 <td><a><i class="delete glyphicon glyphicon-trash"></i></a></td>
		 </tr>
	 <?php }
		 ?>
    </tbody>
</table>
</div>
<?php require 'views/footer.php';?>