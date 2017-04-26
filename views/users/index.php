<section class="content-header">
<h1>User Lists</h1>
</section>

<section class="content">
	<div class="box box-default">
		<div class="box-body">
		<button class="btn btn-default btn-sm" onclick="location.href='?controller=users&action=add';"><i class="fa fa-plus"></i>&nbsp;Add Users</button>
			<table class="table no-border">
				<thead>
					<tr>
						<th>Employee #</th>
						<th>Employee Name</th>
						<th>Department</th>
						<th>Job Code</th>
						<th>Job Description</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user) { ?>
						<tr>
							<td><?php echo $user->num; ?></td>
							<td><?php echo $user->empFn . " " . $user->empMn . " " . $user->empLn; ?></td>
							<td><?php echo $user->dept; ?></td>
							<td><?php echo $user->code; ?></td>
							<td><?php echo $user->desc; ?></td>
							<td>
								<form action="index.php?controller=users&action=edit" method="POST">
									<input type="hidden" name="edit" value=<?php echo $user->id; ?> />
									<button type="submit" class="btn btn-link"><i class="fa fa-pencil-square"></i>&nbsp;Edit</button>
								</form>
							</td>
							<td>
								<form action="?controller=users&action=index" method="POST">
									<input type="hidden" name="delete" value=<?php echo $user->id; ?> />
									<button type="submit" class="btn btn-link"><i class="fa fa-trash"></i>&nbsp;Delete</button>
								</form>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>