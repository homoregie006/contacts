<form class ="form-horizontal" action ="actions/add_contact.php" method="post">
	<div class="control-group">
		<label class="control-label" for="name">Name</label>
		<div class="controls">
			<input name="name" type="text" placeholder="First Name" class="span3" /> <input name="name" type="text" placeholder="Last Name" class="span3" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="name">Email</label>
		<div class="controls">
			<input name="name" type="text" placeholder="Email Address" class="span5" />
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="name">Phone</label>
		<div class="controls">
			<input name="name" type="text" placeholder="No Dashes" class="span3" />
		</div>
	</div>
	<div class="form actions">
		<div class="form-actions">
 		<button type="submit" class="btn btn-success" ><i class="icon-plus icon-white "></i>Add</button>
 		<button type="button" class="btn" onclick="window.history.go(-1)"> <i class="icon-remove"></i>Cancel</button>
		</div>
	</div>
			
	
</form>