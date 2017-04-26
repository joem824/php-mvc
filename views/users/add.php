<section class="content-header">
<h1>Add User</h1>
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
						<input type="text" class="form-control input-sm" name="empNum" />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee First Name:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empFn" />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee Middle Name:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empMn" />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Employee Last Name:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="empLn" />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Department:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="dept" />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Job Code:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="code" />
					</div>
				</div>
				<div class="form-group has-feedback col-xs-12">
					<div class="col-xs-2">
						<b>Job Description:</b>
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control input-sm" name="desc" />
					</div>
				</div>
				<input type="hidden" name="add" value="add" />
				<div class="col-xs-4 text-right">
		          <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-plus"></i>&nbsp;Add User</button>
		        </div>
			</form>
		</div>
	</div>
</section>