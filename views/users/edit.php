<section class="content-header">
<h1>Edit User</h1>
</section>

<section class="content">
	<div class="box box-default">
		<div class="box-body">
			<form action="index.php?controller=users&action=index" method="POST">
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee #:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empNum" value=<?php echo $users->num ?> />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee First Name:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empFn" value=<?php echo $users->empFn ?> />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee Middle Name:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empMn" value=<?php echo $users->empMn ?> />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee Last Name:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empLn" value=<?php echo $users->empLn ?> />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Department:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="dept" value=<?php echo $users->dept ?> />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Job Code:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="code" value=<?php echo $users->code ?> />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Job Description:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="desc" value=<?php echo $users->desc ?> />
					</div>
				</div>
				<input type="hidden" name="edit" value=<?php echo $users->id ?> />
				<div class="col-xs-4 text-right">
		          <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-pencil-square"></i>&nbsp;Edit User</button>
		        </div>
			</form>
		</div>
	</div>
</section>